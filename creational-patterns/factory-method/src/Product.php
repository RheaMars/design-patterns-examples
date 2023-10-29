<?php

declare(strict_types=1);

namespace DesignPatterns\CreationalPatterns\FactoryMethod;

/**
 * The common Product interface which declares behaviors of various types of Concrete Products.
 */
interface Product
{
    public function createPost(string $content): void;
}