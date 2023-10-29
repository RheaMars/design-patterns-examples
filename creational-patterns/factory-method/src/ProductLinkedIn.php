<?php

declare(strict_types=1);

namespace DesignPatterns\CreationalPatterns\FactoryMethod;

/**
 * A Concrete Product.
 */
class ProductLinkedIn implements Product
{
    public function createPost(string $content): void
    {
        echo "Send HTTP API requests to create a post in LinkedIn timeline.\n";
    }
}