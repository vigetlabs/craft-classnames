<?php
/**
 * Classnames plugin for Craft CMS 4.x
 *
 * @link      https://www.viget.com/
 * @copyright Copyright (c) 2022 Viget Labs
 */

namespace viget\classnames\twigextensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

use Newride\Classnames\Classnames as PhpClassnames;

/**
 * @author    Viget
 * @package   Classnames
 * @since     1.0.0
 */
class ClassnamesTwigExtension extends AbstractExtension
{
    // Public Methods
    // =========================================================================
    
    public function getName(): string
    {
        return 'Classnames';
    }

    /**
     * @inheritdoc
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('classNames', [$this, 'classNames']),
            new TwigFunction('cx', [$this, 'classNames']),
        ];
    }

    /**
     * @param object $classnames
     *
     * @return string
     */
    public function classNames(...$classnames): string
    {
        return PhpClassnames::make(...$classnames);
    }
}
