<?php
if (php_sapi_name() !== 'cli') {
    header('Content-Type: text/plain; charset=utf-8');
}

require_once 'Handphone.php';
require_once 'Smartphone.php';
require_once 'FeaturePhone.php';

// Membuat array dari Handphone
$daftarHandphone = [];

// Mengisi array dengan objek Smartphone dan FeaturePhone
$daftarHandphone[0] = new Smartphone("Samsung", "Galaxy S21");
$daftarHandphone[1] = new FeaturePhone("Nokia", "3310");

// Menggunakan loop untuk memanggil metode secara polimorfik
foreach ($daftarHandphone as $hp) {
    $hp->nyalakan();
    $hp->telepon("08123456789");
    $hp->matikan();
    echo PHP_EOL;
}

// Mengakses metode khusus dengan pengecekan instanceof
// (di PHP tidak perlu casting seperti di Java)
foreach ($daftarHandphone as $hp) {
    if ($hp instanceof Smartphone) {
        $hp->aksesInternet();
    } elseif ($hp instanceof FeaturePhone) {
        $hp->mainGameSnake();
    }
}
