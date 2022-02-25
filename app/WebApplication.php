<?php

namespace App;

final class WebApplication
{
    private array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function run(): void
    {
        echo 'run';
    }
}
