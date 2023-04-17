<?php

namespace Ebolution\Logger\Domain;

interface LoggerInterface
{
    public function __invoke(string $message, string $level = 'info'): void;
}