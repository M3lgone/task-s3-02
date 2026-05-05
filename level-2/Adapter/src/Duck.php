<?php

declare(strict_types=1);

class Duck implements DuckAction
{
    public function fly()
    {
        echo "I'm flying \n";
    }

    public function quack()
    {
        echo "Quack \n";
    }
}
