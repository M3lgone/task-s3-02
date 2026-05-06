<?php

declare(strict_types=1);

class Cupoun
{
    private CarCouponGenerator $strategy;


    public function __construct(CarCouponGenerator $strategy)
    {
        $this->strategy = $strategy;
    }

    public function generateCoupon(bool $isHighSeason, bool $bigStock): string
    {
        $this->strategy->addSeasonDiscount($isHighSeason);
        $this->strategy->addStockDiscount($bigStock);
        return $this->strategy->couponGenerator();
    }
}
