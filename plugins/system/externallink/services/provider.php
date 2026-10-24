<?php

/**
 * @package     Joomla.Plugin
 * @subpackage  System.externallink
 *
 * @copyright   (C) 2026 Brian Teeman
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;

use Joomla\CMS\Extension\PluginInterface;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Joomla\Plugin\System\Externallink\Extension\Externallink;

return new class () implements ServiceProviderInterface {
    /**
     * Registers the service provider with a DI container.
     *
     * @param   Container  $container  The DI container.
     *
     * @return  void
     */
    public function register(Container $container): void
    {
        $container->set(
            PluginInterface::class,
            $container->lazy(Externallink::class, function (Container $container) {
                $plugin = new Externallink(
                    (array) PluginHelper::getPlugin('system', 'externallink')
                );
                $plugin->setApplication(Factory::getApplication());

                return $plugin;
            })
        );
    }
};
