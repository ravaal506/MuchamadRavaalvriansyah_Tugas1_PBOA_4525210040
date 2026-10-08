<?php

require_once 'Pasien.php';

class Dokter
{
    private string $nama;

    public function __construct(string $nama)
    {
        $this->nama = $nama;
    }

    // ASOSIASI: Dokter memakai objek Pasien lewat parameter method
    public function merawat(Pasien $pasien): void
    {
        echo "Dokter " . $this->nama . " merawat pasien " . $pasien->getNama() . PHP_EOL;
    }
}
