<?php

declare(strict_types=1);

/**
 * The common Product interface which declares behaviors of various types of Concrete Products.
 */
interface Product
{
    public function createPost(string $content): void;
}