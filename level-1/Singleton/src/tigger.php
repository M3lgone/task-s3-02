<?php

declare(strict_types=1);

class Tigger
{
    private static $instance;
    private int $counter = 0;

    private function __construct()
    {
        echo "Building character..." . PHP_EOL;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    public function roar(): void
    {
        $this->counter++;
        echo "Grrr!" . PHP_EOL;
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new Exception("Error: Can't clone Tigger");
    }

    public function getCounter(): int
    {
        return $this->counter;
    }

}
