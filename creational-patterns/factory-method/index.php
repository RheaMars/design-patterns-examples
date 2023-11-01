<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    $path = 'src/' . $file;
    require_once $path;
});

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