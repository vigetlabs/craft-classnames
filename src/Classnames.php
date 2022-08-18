<?php
/**
 * Classnames plugin for Craft CMS 4.x
 *
 * @link      https://www.viget.com/
 * @copyright Copyright (c) 2022 Viget Labs
 */

namespace viget\classnames;

use Craft;
use viget\classnames\twigextensions\ClassnamesTwigExtension;

use craft\base\Plugin;

/**
 * Class Classnames
 *
 * @author    Jeremy Frank
 * @package   Classnames
 * @since     1.0.0
 *
 */
class Classnames extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Classnames
     */
    public static Plugin $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public string $schemaVersion = '2.0.0';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init(): void
    {
        parent::init();
        self::$plugin = $this;

        Craft::$app->view->registerTwigExtension(new ClassnamesTwigExtension());

        Craft::info(
            Craft::t(
                'classnames',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }
}
