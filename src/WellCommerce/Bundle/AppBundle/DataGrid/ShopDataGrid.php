<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */
namespace WellCommerce\Bundle\AppBundle\DataGrid;

use WellCommerce\Bundle\DataGridBundle\DataGrid\AbstractDataGrid;
use WellCommerce\Component\DataGrid\Column\Column;
use WellCommerce\Component\DataGrid\Column\ColumnCollection;
use WellCommerce\Component\DataGrid\Column\Options\Appearance;
use WellCommerce\Component\DataGrid\Column\Options\Filter;
use WellCommerce\Component\DataGrid\Column\Options\Sorting;

/**
 * Class ShopDataGrid
 *
 * @author Adam Piotrowski <adam@wellcommerce.org>
 */
class ShopDataGrid extends AbstractDataGrid
{
    public function configureColumns(ColumnCollection $collection)
    {
        $collection->add(new Column([
            'id'         => 'id',
            'caption'    => 'common.label.id',
            'sorting'    => new Sorting([
                'default_order' => Sorting::SORT_DIR_ASC,
            ]),
            'appearance' => new Appearance([
                'width'   => 90,
                'visible' => false,
            ]),
            'filter'     => new Filter([
                'type' => Filter::FILTER_BETWEEN,
            ]),
        ]));
        
        $collection->add(new Column([
            'id'         => 'name',
            'caption'    => 'common.label.name',
            'appearance' => new Appearance([
                'width' => 100,
                'align' => Appearance::ALIGN_LEFT
            ]),
        ]));
        
        $collection->add(new Column([
            'id'         => 'url',
            'caption'    => 'common.label.url',
            'appearance' => new Appearance([
                'width' => 180,
                'align' => Appearance::ALIGN_CENTER
            ]),
        ]));
        
        $collection->add(new Column([
            'id'         => 'company',
            'caption'    => 'shop.label.company',
            'appearance' => new Appearance([
                'width' => 140,
                'align' => Appearance::ALIGN_CENTER
            ]),
        ]));
        
        $collection->add(new Column([
            'id'         => 'theme',
            'caption'    => 'shop.label.theme',
            'appearance' => new Appearance([
                'width' => 140,
                'align' => Appearance::ALIGN_CENTER
            ]),
        ]));
        
        $collection->add(new Column([
            'id'         => 'country',
            'caption'    => 'shop.label.default_country',
            'appearance' => new Appearance([
                'width' => 60,
                'align' => Appearance::ALIGN_CENTER
            ]),
        ]));
        
        $collection->add(new Column([
            'id'         => 'currency',
            'caption'    => 'shop.label.default_currency',
            'appearance' => new Appearance([
                'width' => 60,
                'align' => Appearance::ALIGN_CENTER
            ]),
        ]));
    }
    
    public function getIdentifier(): string
    {
        return 'shop';
    }
}
