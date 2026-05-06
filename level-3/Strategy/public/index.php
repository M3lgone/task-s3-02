<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/CarCouponGenerator.php';
require_once __DIR__ . '/../src/BmwCouponGenerator.php';
require_once __DIR__ . '/../src/MercedesCouponGenerator.php';
require_once __DIR__ . '/../src/Coupon.php';

$isHighSeason = false;
$bigStock = true;

$bmwStrategy = new BmwCuponGenerator();
$couponContextBMW = new Cupoun($bmwStrategy);
echo $couponContextBMW->generateCoupon($isHighSeason, $bigStock) . PHP_EOL;

$mercedesStrategy = new MercedesCuponGenerator();
$couponContextMercedes = new Cupoun($mercedesStrategy);
echo $couponContextMercedes->generateCoupon($isHighSeason, $bigStock) . PHP_EOL;
