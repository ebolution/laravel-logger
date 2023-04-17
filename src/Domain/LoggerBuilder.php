<?php

namespace Ebolution\Logger\Domain;

abstract class LoggerBuilder implements BuilderInterface
{
    protected string $driver = 'single';
    protected string $path = '';
    protected string $prefix = '';

    public function getDriver(): string
    {
        return $this->driver;
    }

    public function getPath(): string
    {
        return storage_path($this->path);
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }
}