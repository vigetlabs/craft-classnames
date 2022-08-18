<?php
/**
 * Classnames plugin for Craft CMS 3.x
 *
 * @link      https://www.viget.com/
 * @copyright Copyright (c) 2019 Viget Labs
 */

namespace viget\classnames\twigextensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

use Craft;

use Newride\Classnames\Classnames as PhpClassnames;

/**
 * @author    Jeremy Frank
 * @package   Classnames
 * @since     1.0.0
 */
class ClassnamesTwigExtension extends AbstractExtension
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getName()
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
