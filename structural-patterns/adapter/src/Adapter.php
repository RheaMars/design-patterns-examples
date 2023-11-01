<?php

declare(strict_types=1);

class Adapter implements TargetInterface
{
    public function __construct(private readonly Adaptee $adaptee){}

    public function request(): string
    {
        return 'Adapter: (TRANSLATED) ' . strrev($this->adaptee->specificRequest());
    }
}