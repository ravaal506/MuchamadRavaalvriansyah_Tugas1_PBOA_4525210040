<?php

require_once 'BangunDatar.php';

class Segitiga extends BangunDatar
{
    private int $alas;
    private int $tinggi;

    public function __construct(int $alas, int $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    // hanya luas() yang di-override, keliling() tidak
    public function luas(): float
    {
        return ($this->alas * $this->tinggi) / 2;
    }
}
