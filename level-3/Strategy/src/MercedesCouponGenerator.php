<?php

declare(strict_types=1);

class MercedesCuponGenerator implements CarCouponGenerator
{
    private int $discount = 0;

    public function addSeasonDiscount(bool $isHighSeason): void
    {
        if (!$isHighSeason) {
            $this->discount += 4;
        }
    }
    public function addStockDiscount(bool $bigStock): void
    {
        if ($bigStock) {
            $this->discount += 10;
        }
    }

    public function couponGenerator(): string
    {
        return "Mercedes: Get {$this->discount}% off the price of your new car.";
    }
}
