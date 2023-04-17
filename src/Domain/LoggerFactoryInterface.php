<?php

namespace Ebolution\Logger\Domain;

use Ebolution\Logger\Infrastructure\Logger;

interface LoggerFactoryInterface
{
    public function create(): Logger;
}