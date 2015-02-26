<?php

namespace SD\RestHookBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class SDRestHookExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $container->setParameter('sd_rest_hook.formats', $config['formats']);
        $container->setParameter('sd_rest_hook.route_patterns', $config['route_patterns']);
        $container->setParameter('sd_rest_hook.json_callback', $config['json_callback']);
        $container->setParameter('sd_rest_hook.request_listener_priority', $config['request_listener_priority']);
    }
}
