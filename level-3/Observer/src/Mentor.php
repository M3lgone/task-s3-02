<?php

declare(strict_types=1);

class Mentor implements Teacher
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(string $nameTask): void
    {
        echo "🔔 Notification for {$this->name}, you can revise {$nameTask}\n";
    }
}
