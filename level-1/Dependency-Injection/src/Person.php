<?php

declare(strict_types=1);


class Person
{
    private $pocket;

    public function __construct(array $gadgetsSaved)
    {
        $this->pocket = $gadgetsSaved;
    }

    public function saveGadgets()
    {
        foreach ($this->pocket as $gadget) {
            echo $gadget->save() . "\n";
        }
    }
}
