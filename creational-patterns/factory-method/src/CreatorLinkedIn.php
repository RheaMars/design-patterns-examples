<?php

declare(strict_types=1);

/**
 * A Concrete Creator.
 */
class CreatorLinkedIn extends Creator
{
    public function getSocialNetwork(): Product
    {
        return new ProductLinkedIn();
    }
}