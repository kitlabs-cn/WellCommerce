<?php
/**
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\AppBundle\Service\Layout\Configurator;

use WellCommerce\Bundle\AppBundle\Controller\Box\ClientRegistrationBoxController;
use WellCommerce\Bundle\CoreBundle\Layout\Configurator\AbstractLayoutBoxConfigurator;

/**
 * Class ClientRegistrationBoxConfigurator
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
final class ClientRegistrationBoxConfigurator extends AbstractLayoutBoxConfigurator
{
    public function __construct(ClientRegistrationBoxController $controller)
    {
        $this->controller = $controller;
    }
    
    public function getType(): string
    {
        return 'ClientRegistration';
    }
}
