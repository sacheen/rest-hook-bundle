<?php

namespace SD\RestHookBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('sd_rest_hook');

        $rootNode->children()
            ->arrayNode('formats')->requiresAtLeastOneElement()->prototype('scalar')->end()->end()
            ->arrayNode('route_patterns')->prototype('scalar')->end()->end()
            ->scalarNode('json_callback')->defaultNull()->end()
            ->scalarNode('request_listener_priority')->defaultValue(100)->end()
            ->end();

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
