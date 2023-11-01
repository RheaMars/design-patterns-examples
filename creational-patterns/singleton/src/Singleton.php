<?php

declare(strict_types=1);

class Singleton
{
    private static array $instances = [];

    protected function __construct() { }

    /**
     * Cloning is not permitted for singletons.
     */
    protected function __clone() { }

    /**
     * Unserialization is not permitted for singletons.
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }

    public static function getInstance()
    {
        $subclass = static::class;

        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }

        return self::$instances[$subclass];
    }
}