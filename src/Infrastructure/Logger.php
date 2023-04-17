<?php

namespace Ebolution\Logger\Infrastructure;

use Illuminate\Support\Facades\Log;
use Ebolution\Logger\Domain\BuilderInterface;
use Ebolution\Logger\Domain\LoggerInterface;

class Logger implements LoggerInterface
{
    public function __construct(
        private BuilderInterface $builder
    ) {}

    public function __invoke(string $message, string $level = 'info'): void
    {
        $channel = Log::build([
            'driver' => $this->builder->getDriver(),
            'path' => $this->builder->getPath(),
        ]);

        $prefix = $this->builder->getPrefix();
        $message = ($prefix ? '[' . $prefix . '] ' : '') . $message;
        Log::stack(['slack', $channel])->{$level}($message);
    }
}
