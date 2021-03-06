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
namespace PhpCsFixer\Console\Report\ListSetsReport;

use PhpCsFixer\RuleSet\RuleSetDescriptionInterface;
/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * @internal
 */
final class TextReporter implements \PhpCsFixer\Console\Report\ListSetsReport\ReporterInterface
{
    /**
     * {@inheritdoc}
     */
    public function getFormat() : string
    {
        return 'txt';
    }
    /**
     * {@inheritdoc}
     * @param \PhpCsFixer\Console\Report\ListSetsReport\ReportSummary $reportSummary
     */
    public function generate($reportSummary) : string
    {
        $output = '';
        $i = 0;
        $sets = $reportSummary->getSets();
        \usort($sets, function (\PhpCsFixer\RuleSet\RuleSetDescriptionInterface $a, \PhpCsFixer\RuleSet\RuleSetDescriptionInterface $b) {
            return $a->getName() > $b->getName() ? 1 : -1;
        });
        foreach ($sets as $set) {
            ++$i;
            $output .= \sprintf('%2d) %s', $i, $set->getName()) . \PHP_EOL . '      ' . $set->getDescription() . \PHP_EOL;
            if ($set->isRisky()) {
                $output .= '      Set contains risky rules.' . \PHP_EOL;
            }
        }
        return $output;
    }
}
