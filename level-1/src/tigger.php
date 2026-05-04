<?php

declare(strict_types=1);

class Tigger
{
    private function __construct()
    {
        echo "Building character..." . PHP_EOL;
    }

    public function roar()
    {
        echo "Grrr!" . PHP_EOL;
    }

}
