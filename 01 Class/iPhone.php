<?php

class iPhone
{
    // Properties
    /*
     * warna/color
     * storage/kapasitas penyimpanan
     */
    public string $color;
    public string $storage;

    // Konstruktor
    /*
     * Di PHP, konstruktor namanya selalu __construct (bukan sama dengan nama class seperti di Java).
     * Setiap objek yang dibentuk dari class harus memberikan nilai terhadap beberapa properties.
     */
    public function __construct(string $color, string $storage)
    {
        // $this --> merujuk ke objek yang sedang dibuat (sama seperti this di Java)
        $this->color = $color;
        $this->storage = $storage;
    }

    // public -> bisa diakses dari luar class
    // : string --> tipe data output dari method getColor adalah string
    // return --> mengembalikan nilai supaya method punya keluaran/output
    public function getColor(): string
    {
        return $this->color;
    }

    public function getStorage(): string
    {
        return $this->storage;
    }
}
