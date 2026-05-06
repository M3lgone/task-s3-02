<?php

declare(strict_types=1);

class BmwCuponGenerator implements CarCouponGenerator
{
    private int $discount = 0;

    public function addSeasonDiscount(bool $isHighSeason): void
    {
        if (!$isHighSeason) {
            $this->discount += 5;
        }
    }

    public function addStockDiscount(bool $bigStock): void
    {
        if ($bigStock) {
            $this->discount += 7;
        }
    }

    public function couponGenerator(): string
    {
        return "BMW: Get {$this->discount}% off the price of your new car.";
    }

}
