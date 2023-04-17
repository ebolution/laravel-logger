<?php

namespace Ebolution\Logger\Infrastructure;

use Ebolution\Logger\Domain\BuilderInterface;
use Ebolution\Logger\Domain\LoggerFactoryInterface;

class LoggerFactory implements LoggerFactoryInterface
{
    public function __construct(
        private BuilderInterface $builder
    ) {}

    public function create(): Logger
    {
        return new Logger($this->builder);
    }
}