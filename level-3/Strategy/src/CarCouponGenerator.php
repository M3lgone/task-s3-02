<?php

declare(strict_types=1);

interface CarCouponGenerator
{
    public function addSeasonDiscount(bool $isHighSeason): void;

    public function addStockDiscount(bool $bigStock): void;

    public function couponGenerator(): string;
}
