<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/tigger.php';


$tigger = Tigger::getInstance();
$tigger2 = Tigger::getInstance();

var_dump($tigger === $tigger2);

$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();

echo "Roars: " . $tigger->getCounter() . " times." .  PHP_EOL;
