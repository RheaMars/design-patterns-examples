<?php

declare(strict_types=1);

class Target implements TargetInterface
{
    public function request(): string
    {
        return "Target: The default target's behavior.";
    }
}