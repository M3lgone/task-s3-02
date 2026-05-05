<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/DuckAction.php';
require_once __DIR__ . '/../src/Duck.php';
require_once __DIR__ . '/../src/Turkey.php';
require_once __DIR__ . '/../src/TurkeyAdapter.php';

function duck_interaction($duck)
{
    $duck->quack();
    $duck->fly();
}

$duck = new Duck();
$turkey = new Turkey();
$turkey_adapter = new TurkeyAdapter($turkey);
echo "The Turkey says...\n";
$turkey->gobble();
$turkey->fly();
echo "The Duck says...\n";
duck_interaction($duck);
echo "The TurkeyAdapter says...\n";
duck_interaction($turkey_adapter);
