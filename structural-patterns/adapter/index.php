<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    $path = 'src/' . $file;
    require_once $path;
});

function executeSomeClientCode(TargetInterface $target): void
{
    echo $target->request();
}

$target = new Target();
executeSomeClientCode($target);

// The Adapter makes the Adaptee's interface compatible with the Target's interface:
$adapter = new Adapter(new Adaptee());
executeSomeClientCode($adapter);