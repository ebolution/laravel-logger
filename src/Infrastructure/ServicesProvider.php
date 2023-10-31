<?php
/**
 * @category  Ebolution
 * @package   Ebolution/LaravelShipmentsCompute
 * @author    Avanzed Cloud Develop, S.L. desarrollo@ebolution.com
 * @copyright © 2023 Avanzed Cloud Develop, S.L. - All rights reserved.
 * @license   Proprietary https://ebolution.com
 */

namespace Ebolution\Logger\Infrastructure;

use Ebolution\ModuleManager\Infrastructure\ServicesProvider as ModuleManagerServiceProviders;

final class ServicesProvider extends ModuleManagerServiceProviders
{
    const BASE_DIR = __DIR__;

    protected $providers = [
        ServiceProviders\DependencyServicesProvider::class,
    ];
}
