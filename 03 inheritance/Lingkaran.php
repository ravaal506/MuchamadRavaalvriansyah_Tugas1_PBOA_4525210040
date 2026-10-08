<?php

require_once 'BangunDatar.php';

// "extends" --> Lingkaran mewarisi BangunDatar
class Lingkaran extends BangunDatar
{
    // r atau jari-jari
    private int $r;

    public function __construct(int $r)
    {
        $this->r = $r;
    }

    // override method luas() dari parent
    public function luas(): float
    {
        return M_PI * $this->r * $this->r;
    }

    // override method keliling() dari parent
    public function keliling(): float
    {
        return 2 * M_PI * $this->r;
    }
}
