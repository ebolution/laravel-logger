<?php

namespace Ebolution\Logger\Domain;

interface BuilderInterface
{
    public function getDriver(): string;
    public function getPath(): string;
    public function getPrefix(): string;
}