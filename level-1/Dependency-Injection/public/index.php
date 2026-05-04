<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/Gadget.php';
require_once __DIR__ . '/../src/HomeKeys.php';
require_once __DIR__ . '/../src/Wallet.php';
require_once __DIR__ . '/../src/Smartphone.php';
require_once __DIR__ . '/../src/Person.php';

$homeKeys = new HomeKeys();
$wallet = new Wallet();
$smartphone = new Smartphone();

$myPocket = [$homeKeys, $wallet, $smartphone];

$person = new Person($myPocket);

$person->saveGadgets();
