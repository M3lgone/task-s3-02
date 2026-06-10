<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/tigger.php';


$tigger = Tigger::getInstance();
$tigger2 = Tigger::getInstance();

var_dump($tigger === $tigger2);

for ($i = 0; $i < 6; $i++) {
    $tigger->roar();
}

echo "Roars: " . $tigger->getCounter() . " times." .  PHP_EOL;
