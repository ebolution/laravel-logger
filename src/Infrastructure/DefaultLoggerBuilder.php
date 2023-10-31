<?php
/**
 * @category  Ebolution
 * @package   Ebolution/Logger
 * @author    Carlos Cid <carlos.cid@ebolution.com>
 * @copyright 2023 Avanzed Cloud Develop S.L
 * @license   Private - https://www.ebolution.com/
 */

namespace Ebolution\Logger\Infrastructure;

use Ebolution\Logger\Domain\LoggerBuilder;

class DefaultLoggerBuilder extends LoggerBuilder
{
    public function __construct()
    {
        $this->driver = config('ebolution-laravel-nutt.logging.default.driver', 'single');
        $this->path = config('ebolution-laravel-nutt.logging.default.path', 'logs/laravel.log');
        $this->prefix = config('ebolution-laravel-nutt.logging.default.prefix', '');
    }
}
