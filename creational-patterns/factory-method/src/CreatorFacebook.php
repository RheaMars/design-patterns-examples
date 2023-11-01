<?php

declare(strict_types=1);

/**
 * A Concrete Creator.
 */
class CreatorFacebook extends Creator
{
    public function getSocialNetwork(): Product
    {
        return new ProductFacebook();
    }
}