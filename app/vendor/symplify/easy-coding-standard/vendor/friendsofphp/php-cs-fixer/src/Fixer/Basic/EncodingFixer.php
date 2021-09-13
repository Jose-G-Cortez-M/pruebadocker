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
namespace PhpCsFixer\Fixer\Basic;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
/**
 * Fixer for rules defined in PSR1 ¶2.2.
 *
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 */
final class EncodingFixer extends \PhpCsFixer\AbstractFixer
{
    /**
     * @var string
     */
    private $BOM;
    public function __construct()
    {
        parent::__construct();
        $this->BOM = \pack('CCC', 0xef, 0xbb, 0xbf);
    }
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : \PhpCsFixer\FixerDefinition\FixerDefinitionInterface
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition('PHP code MUST use only UTF-8 without BOM (remove BOM).', [new \PhpCsFixer\FixerDefinition\CodeSample($this->BOM . '<?php

echo "Hello!";
')]);
    }
    /**
     * {@inheritdoc}
     */
    public function getPriority() : int
    {
        // must run first (at least before Fixers that using Tokens) - for speed reason of whole fixing process
        return 100;
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens) : bool
    {
        return \true;
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens) : void
    {
        $content = $tokens[0]->getContent();
        if (0 === \strncmp($content, $this->BOM, 3)) {
            $newContent = \substr($content, 3);
            if ('' === $newContent) {
                $tokens->clearAt(0);
            } else {
                $tokens[0] = new \PhpCsFixer\Tokenizer\Token([$tokens[0]->getId(), $newContent]);
            }
        }
    }
}