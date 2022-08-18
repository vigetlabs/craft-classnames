<?php
/**
 * Classnames plugin for Craft CMS 3.x
 *
 * @link      https://www.viget.com/
 * @copyright Copyright (c) 2019 Viget Labs
 */

use viget\classnames\twigextensions\ClassnamesTwigExtension;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

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
    public static $plugin;

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
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Craft::$app->view->registerTwigExtension(new ClassnamesTwigExtension());

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'classnames',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
