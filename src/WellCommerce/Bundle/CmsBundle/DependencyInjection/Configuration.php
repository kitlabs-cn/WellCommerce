<?php

/*
 * This file is part of the Ivory Lucene Search package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\CmsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root('well_commerce_cms');
        $this->processConfiguration($rootNode);
        
        return $treeBuilder;
    }
    
    //@formatter:off
    protected function processConfiguration(ArrayNodeDefinition $node)
    {
        $node
            ->children()
                ->arrayNode('route_redirects')
                    ->useAttributeAsKey('name')
                    ->prototype('array')
                        ->children()
                            ->scalarNode('route')->isRequired()->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }
    //@formatter:on
}
