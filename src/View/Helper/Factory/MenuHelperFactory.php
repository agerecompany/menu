<?php
/**
 * The MIT License (MIT)
 * Copyright (c) 2018 Stagem Team
 * This source file is subject to The MIT License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/MIT
 *
 * @category Stagem
 * @package Stagem_ZfcMenu
 * @author Serhii Popov <popow.serhii@gmail.com>
 * @license https://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace Stagem\ZfcMenu\View\Helper\Factory;

use Psr\Container\ContainerInterface;
use Stagem\ZfcMenu\View\Helper\MenuHelper;

class MenuHelperFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $menuService = $container->get('MenuService');
        $menuHelper = new MenuHelper($menuService);

        return $menuHelper;
    }
}