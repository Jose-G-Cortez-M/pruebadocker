<?php

declare (strict_types=1);
/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace PhpCsFixer\Fixer\Import;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Preg;
use PhpCsFixer\Tokenizer\Analyzer\Analysis\NamespaceAnalysis;
use PhpCsFixer\Tokenizer\Analyzer\Analysis\NamespaceUseAnalysis;
use PhpCsFixer\Tokenizer\Analyzer\NamespacesAnalyzer;
use PhpCsFixer\Tokenizer\Analyzer\NamespaceUsesAnalyzer;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 */
final class NoUnusedImportsFixer extends \PhpCsFixer\AbstractFixer
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : \PhpCsFixer\FixerDefinition\FixerDefinitionInterface
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition('Unused `use` statements must be removed.', [new \PhpCsFixer\FixerDefinition\CodeSample("<?php\nuse \\DateTime;\nuse \\Exception;\n\nnew DateTime();\n")]);
    }
    /**
     * {@inheritdoc}
     *
     * Must run before BlankLineAfterNamespaceFixer, NoExtraBlankLinesFixer, NoLeadingImportSlashFixer, SingleLineAfterImportsFixer.
     * Must run after ClassKeywordRemoveFixer, GlobalNamespaceImportFixer, PhpUnitFqcnAnnotationFixer, SingleImportPerStatementFixer.
     */
    public function getPriority() : int
    {
        return -10;
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens) : bool
    {
        return $tokens->isTokenKindFound(\T_USE);
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens) : void
    {
        $useDeclarations = (new \PhpCsFixer\Tokenizer\Analyzer\NamespaceUsesAnalyzer())->getDeclarationsFromTokens($tokens);
        if (0 === \count($useDeclarations)) {
            return;
        }
        foreach ((new \PhpCsFixer\Tokenizer\Analyzer\NamespacesAnalyzer())->getDeclarations($tokens) as $namespace) {
            $currentNamespaceUseDeclarations = \array_filter($useDeclarations, static function (\PhpCsFixer\Tokenizer\Analyzer\Analysis\NamespaceUseAnalysis $useDeclaration) use($namespace) {
                return $useDeclaration->getStartIndex() >= $namespace->getScopeStartIndex() && $useDeclaration->getEndIndex() <= $namespace->getScopeEndIndex();
            });
            $usagesSearchIgnoredIndexes = [];
            foreach ($currentNamespaceUseDeclarations as $useDeclaration) {
                $usagesSearchIgnoredIndexes[$useDeclaration->getStartIndex()] = $useDeclaration->getEndIndex();
            }
            foreach ($currentNamespaceUseDeclarations as $useDeclaration) {
                if (!$this->isImportUsed($tokens, $namespace, $usagesSearchIgnoredIndexes, $useDeclaration->getShortName())) {
                    $this->removeUseDeclaration($tokens, $useDeclaration);
                }
            }
            $this->removeUsesInSameNamespace($tokens, $currentNamespaceUseDeclarations, $namespace);
        }
    }
    /**
     * @param array<int, int> $ignoredIndexes
     */
    private function isImportUsed(\PhpCsFixer\Tokenizer\Tokens $tokens, \PhpCsFixer\Tokenizer\Analyzer\Analysis\NamespaceAnalysis $namespace, array $ignoredIndexes, string $shortName) : bool
    {
        $namespaceEndIndex = $namespace->getScopeEndIndex();
        for ($index = $namespace->getScopeStartIndex(); $index <= $namespaceEndIndex; ++$index) {
            if (isset($ignoredIndexes[$index])) {
                $index = $ignoredIndexes[$index];
                continue;
            }
            $token = $tokens[$index];
            if ($token->isGivenKind(\T_STRING)) {
                $prevMeaningfulToken = $tokens[$tokens->getPrevMeaningfulToken($index)];
                if ($prevMeaningfulToken->isGivenKind(\T_NAMESPACE)) {
                    $index = $tokens->getNextTokenOfKind($index, [';', '{', [\T_CLOSE_TAG]]);
                    continue;
                }
                if (0 === \strcasecmp($shortName, $token->getContent()) && !$prevMeaningfulToken->isGivenKind([\T_NS_SEPARATOR, \T_CONST, \T_DOUBLE_COLON]) && !$prevMeaningfulToken->isObjectOperator()) {
                    return \true;
                }
                continue;
            }
            if ($token->isComment() && \PhpCsFixer\Preg::match('/(?<![[:alnum:]\\$])(?<!\\\\)' . $shortName . '(?![[:alnum:]])/i', $token->getContent())) {
                return \true;
            }
        }
        return \false;
    }
    private function removeUseDeclaration(\PhpCsFixer\Tokenizer\Tokens $tokens, \PhpCsFixer\Tokenizer\Analyzer\Analysis\NamespaceUseAnalysis $useDeclaration) : void
    {
        for ($index = $useDeclaration->getEndIndex() - 1; $index >= $useDeclaration->getStartIndex(); --$index) {
            if ($tokens[$index]->isComment()) {
                continue;
            }
            if (!$tokens[$index]->isWhitespace() || \false === \strpos($tokens[$index]->getContent(), "\n")) {
                $tokens->clearTokenAndMergeSurroundingWhitespace($index);
                continue;
            }
            // when multi line white space keep the line feed if the previous token is a comment
            $prevIndex = $tokens->getPrevNonWhitespace($index);
            if ($tokens[$prevIndex]->isComment()) {
                $content = $tokens[$index]->getContent();
                $tokens[$index] = new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, \substr($content, \strrpos($content, "\n"))]);
                // preserve indent only
            } else {
                $tokens->clearTokenAndMergeSurroundingWhitespace($index);
            }
        }
        if ($tokens[$useDeclaration->getEndIndex()]->equals(';')) {
            // do not remove `? >`
            $tokens->clearAt($useDeclaration->getEndIndex());
        }
        // remove white space above and below where the `use` statement was
        $prevIndex = $useDeclaration->getStartIndex() - 1;
        $prevToken = $tokens[$prevIndex];
        if ($prevToken->isWhitespace()) {
            $content = \rtrim($prevToken->getContent(), " \t");
            if ('' === $content) {
                $tokens->clearAt($prevIndex);
            } else {
                $tokens[$prevIndex] = new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, $content]);
            }
            $prevToken = $tokens[$prevIndex];
        }
        if (!isset($tokens[$useDeclaration->getEndIndex() + 1])) {
            return;
        }
        $nextIndex = $tokens->getNonEmptySibling($useDeclaration->getEndIndex(), 1);
        if (null === $nextIndex) {
            return;
        }
        $nextToken = $tokens[$nextIndex];
        if ($nextToken->isWhitespace()) {
            $content = \PhpCsFixer\Preg::replace("#^\r\n|^\n#", '', \ltrim($nextToken->getContent(), " \t"), 1);
            if ('' !== $content) {
                $tokens[$nextIndex] = new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, $content]);
            } else {
                $tokens->clearAt($nextIndex);
            }
            $nextToken = $tokens[$nextIndex];
        }
        if ($prevToken->isWhitespace() && $nextToken->isWhitespace()) {
            $content = $prevToken->getContent() . $nextToken->getContent();
            if ('' !== $content) {
                $tokens[$nextIndex] = new \PhpCsFixer\Tokenizer\Token([\T_WHITESPACE, $content]);
            } else {
                $tokens->clearAt($nextIndex);
            }
            $tokens->clearAt($prevIndex);
        }
    }
    private function removeUsesInSameNamespace(\PhpCsFixer\Tokenizer\Tokens $tokens, array $useDeclarations, \PhpCsFixer\Tokenizer\Analyzer\Analysis\NamespaceAnalysis $namespaceDeclaration) : void
    {
        $namespace = $namespaceDeclaration->getFullName();
        $nsLength = \strlen($namespace . '\\');
        foreach ($useDeclarations as $useDeclaration) {
            if ($useDeclaration->isAliased()) {
                continue;
            }
            $useDeclarationFullName = \ltrim($useDeclaration->getFullName(), '\\');
            if (0 !== \strpos($useDeclarationFullName, $namespace . '\\')) {
                continue;
            }
            $partName = \substr($useDeclarationFullName, $nsLength);
            if (\false === \strpos($partName, '\\')) {
                $this->removeUseDeclaration($tokens, $useDeclaration);
            }
        }
    }
}
