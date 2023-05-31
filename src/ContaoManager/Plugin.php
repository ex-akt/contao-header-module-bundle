<?php

/*
 * This file is part of the ContaoHeaderModuleBundle.
 *
 * (c) ex-akt <https://github.com/ex-akt>
 *
 * @package ContaoBricksHeaderBundle
 * @author Samuel Heer <https://github.com/samuelheer>
 * @license LGPL-3.0-or-later
 * @copyright ex-akt 2023
 */

namespace ExAkt\ContaoHeaderModuleBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use ExAkt\ContaoHeaderModuleBundle\ExAktContaoHeaderModuleBundle;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\HttpKernel\KernelInterface;


class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ExAktContaoHeaderModuleBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
