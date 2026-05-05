<?php

declare(strict_types=1);

class DishWasher
{
    private $cleanDish;
    private $soapDish;
    private $clearDish;
    private $dryDish;

    public function __construct()
    {
        $this->cleanDish = new ICleanDish();
        $this->soapDish = new ISoapDish();
        $this->clearDish = new IClearDish();
        $this->dryDish = new IDryDish();
    }

    public function turnOnDishWasher()
    {
        echo "Putting detergent tablet and press button to turn on dishwasher..\n";
        $result = $this->cleanDish->clean();
        $result .= $this->soapDish->soap();
        $result .= $this->clearDish->clear();
        $result .= $this->dryDish->dry();

        return $result . "Your dishes are clean :)";
    }
}
