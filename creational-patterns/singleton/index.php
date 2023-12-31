<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    $path = 'src/' . $file;
    require_once $path;
});

// Check logger singleton:
$logger1 = SingletonLogger::getInstance();
$logger2 = SingletonLogger::getInstance();

if ($logger1 === $logger2) {
    SingletonLogger::log('Logger singleton is working.');
}
else {
    SingletonLogger::log('Issue with logger singleton.');
}

// Check config singleton:
$testLogin = 'test_login';

$config1 = SingletonConfig::getInstance();
$config1->setValue('login', $testLogin);

$config2 = SingletonConfig::getInstance();

if ($testLogin === $config2->getValue('login')) {
    SingletonLogger::log('Config singleton is working.');
}
else {
    SingletonLogger::log('Issue with config singleton.');
}