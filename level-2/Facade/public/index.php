<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/ICleanDish.php';
require_once __DIR__ . '/../src/ISoapDish.php';
require_once __DIR__ . '/../src/IClearDish.php';
require_once __DIR__ . '/../src/IDryDish.php';
require_once __DIR__ . '/../src/DishWasher.php';

$dishWasherMachine = new DishWasher();

echo $dishWasherMachine->turnOnDishWasher();
