<?php
if (php_sapi_name() !== 'cli') {
    header('Content-Type: text/plain; charset=utf-8');
}

require_once 'Mahasiswa.php';

// Constructor tanpa parameter (memakai nilai default)
$soja = new Mahasiswa();
$soja->tampilkanInfo();

// memberikan value Soja Purnamasari ke property nama dari objek soja
$soja->setNama("Soja Purnamasari");
echo "Nama : " . $soja->getNama() . PHP_EOL;

$soja->setNim("4523210104");
echo "NIM : " . $soja->getNim() . PHP_EOL;

$soja->setUmur(15);
echo "Umur : " . $soja->getUmur() . PHP_EOL;

// Constructor lengkap
$nenden = new Mahasiswa("Nenden Nuraini", "4523210144", 17);
$nenden->tampilkanInfo();
