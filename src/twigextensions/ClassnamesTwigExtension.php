<?php
/**
 * Classnames plugin for Craft CMS 3.x
 *
 * @link      https://www.viget.com/
 * @copyright Copyright (c) 2019 Viget Labs
 */

namespace viget\classnames\twigextensions;

use viget\classnames\Classnames;

use Craft;

use Newride\Classnames\Classnames as PhpClassnames;

/**
 * @author    Jeremy Frank
 * @package   Classnames
 * @since     1.0.0
 */
class ClassnamesTwigExtension extends \Twig_Extension
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
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('classNames', [$this, 'classNames']),
            new \Twig_SimpleFunction('cx', [$this, 'classNames']),
        ];
    }

    /**
     * @param object $classnames
     *
     * @return string
     */
    public function classNames(...$classnames)
    {
        return PhpClassnames::make(...$classnames);
    }
}
