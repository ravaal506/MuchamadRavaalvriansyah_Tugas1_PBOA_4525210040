<?php

require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';
require_once 'FuelableDefault.php';

class Motor extends Vehicle implements Fuelable, Movable
{
    // Memakai refuel() bawaan (default) dari trait, tanpa override
    use FuelableDefault;

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function move(): void
    {
        echo $this->name . " bergerak di tanah gravel." . PHP_EOL;
    }
}
