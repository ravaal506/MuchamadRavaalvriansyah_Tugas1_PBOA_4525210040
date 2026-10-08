<?php
if (php_sapi_name() !== 'cli') {
    header('Content-Type: text/plain; charset=utf-8');
}

require_once 'MahasiswaInternational.php';

// Constructor tanpa parameter di MahasiswaInternational
$mhsInt1 = new MahasiswaInternational();
$mhsInt1->setNama("Paolo Dicanio");
$mhsInt1->setNim("INT12345");
$mhsInt1->setUmur(21);
$mhsInt1->setNegaraAsal("Italy");
$mhsInt1->tampilkanInfo();

echo PHP_EOL;

// Constructor dengan 3 parameter (nama, nim, negara)
$mhsInt2 = new MahasiswaInternational("Sarah", "INT67890", "Australia");
$mhsInt2->setUmur(22); // Mengatur umur menggunakan setter
$mhsInt2->tampilkanInfo();

echo PHP_EOL;

// Constructor dengan 4 parameter (nama, nim, umur, negara)
$mhsInt3 = new MahasiswaInternational("David", "INT54321", 23, "UK");
$mhsInt3->tampilkanInfo();
