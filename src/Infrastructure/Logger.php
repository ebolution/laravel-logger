<?php

namespace Ebolution\Logger\Infrastructure;

use Illuminate\Support\Facades\Log;
use Ebolution\Logger\Domain\BuilderInterface;
use Ebolution\Logger\Domain\LoggerInterface;

class Logger implements LoggerInterface
{
    protected array $channels;

    public function __construct(
        private readonly BuilderInterface $builder
    ) {
        $channel = Log::build([
            'driver' => $this->builder->getDriver(),
            'path' => $this->builder->getPath(),
        ]);

        $this->channels = array_merge(
            config('ebolution-laravel-nutt.logging.channels.default', []),
            [$channel]);
    }

    public function __invoke(string $message, string $level = 'info'): void
    {
        $prefix = $this->builder->getPrefix();
        $message = ($prefix ? '[' . $prefix . '] ' : '') . $message;
        Log::stack($this->channels)->{$level}($message);
    }
}
