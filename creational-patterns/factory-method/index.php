<?php

declare(strict_types=1);

foreach (glob("src/*.php") as $filename) { require $filename; }

use DesignPatterns\CreationalPatterns\FactoryMethod\Creator;
use DesignPatterns\CreationalPatterns\FactoryMethod\CreatorFacebook;
use DesignPatterns\CreationalPatterns\FactoryMethod\CreatorLinkedIn;

/**
 * Note that this client code method can work with any subclass of Creator since it
 * doesn't depend on concrete classes.
 */
function executeSomeClientCode(Creator $creator): void
{
    $creator->post("Hello world!");
}

executeSomeClientCode(new CreatorFacebook());
executeSomeClientCode(new CreatorLinkedIn());