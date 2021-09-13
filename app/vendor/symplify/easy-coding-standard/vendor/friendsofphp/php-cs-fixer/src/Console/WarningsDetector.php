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
namespace PhpCsFixer\Console;

use PhpCsFixer\ToolInfo;
use PhpCsFixer\ToolInfoInterface;
/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * @internal
 */
final class WarningsDetector
{
    /**
     * @var ToolInfoInterface
     */
    private $toolInfo;
    /**
     * @var string[]
     */
    private $warnings = [];
    public function __construct(\PhpCsFixer\ToolInfoInterface $toolInfo)
    {
        $this->toolInfo = $toolInfo;
    }
    public function detectOldMajor() : void
    {
        // @TODO 3.99 to be activated with new MAJOR release
        // $currentMajorVersion = \intval(explode('.', Application::VERSION)[0], 10);
        // $nextMajorVersion = $currentMajorVersion + 1;
        // $this->warnings[] = "You are running PHP CS Fixer v{$currentMajorVersion}, which is not maintained anymore. Please update to v{$nextMajorVersion}.";
    }
    public function detectOldVendor() : void
    {
        if ($this->toolInfo->isInstalledByComposer()) {
            $details = $this->toolInfo->getComposerInstallationDetails();
            if (\PhpCsFixer\ToolInfo::COMPOSER_LEGACY_PACKAGE_NAME === $details['name']) {
                $this->warnings[] = \sprintf('You are running PHP CS Fixer installed with old vendor `%s`. Please update to `%s`.', \PhpCsFixer\ToolInfo::COMPOSER_LEGACY_PACKAGE_NAME, \PhpCsFixer\ToolInfo::COMPOSER_PACKAGE_NAME);
            }
        }
    }
    /**
     * @return string[]
     */
    public function getWarnings() : array
    {
        if (!\count($this->warnings)) {
            return [];
        }
        return \array_unique(\array_merge($this->warnings, ['If you need help while solving warnings, ask at https://gitter.im/PHP-CS-Fixer, we will help you!']));
    }
}
