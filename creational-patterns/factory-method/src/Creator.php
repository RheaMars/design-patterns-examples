<?php

declare(strict_types=1);

/**
 * The abstract Creator which contains the factory method.
 */
abstract class Creator
{
    /**
     * The actual factory method.
     */
    abstract public function getSocialNetwork(): Product;

    public function post($content): void
    {
        // Call the factory method to create the concrete Product object:
        $network = $this->getSocialNetwork();

        $network->createPost($content);
    }
}