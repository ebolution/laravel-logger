<?php
/**
 * @category  Ebolution
 * @package   Ebolution/Logger
 * @author    Avanzed Cloud Develop, S.L. desarrollo@ebolution.com
 * @copyright © 2023 Avanzed Cloud Develop, S.L. - All rights reserved.
 * @license   Propietary https://ebolution.com
 */

namespace Ebolution\Logger\Infrastructure\ServiceProviders;

use Ebolution\Logger;
use Illuminate\Support\ServiceProvider;

final class DependencyServicesProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app
            ->when(Logger\Infrastructure\LoggerFactory::class)
            ->needs(Logger\Domain\BuilderInterface::class)
            ->give(Logger\Infrastructure\DefaultLoggerBuilder::class);
    }
}
