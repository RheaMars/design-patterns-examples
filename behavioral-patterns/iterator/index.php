<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    $path = 'src/' . $file;
    require_once $path;
});

$collection = new WordsCollection();
$collection->addItem("a");
$collection->addItem("b");
$collection->addItem("c");

foreach ($collection->getIterator() as $item) {
    echo $item . "\n";
}

foreach ($collection->getReverseIterator() as $item) {
    echo $item . "\n";
}