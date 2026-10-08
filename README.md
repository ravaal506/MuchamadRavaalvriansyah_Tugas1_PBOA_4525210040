# Nama : Muchamad Rava Alvriansyah

# Matkul : PBO-A

# Tugas PBO – Konversi Java ke PHP

---

## Materi 01 – Class

**Folder:** `01 Class/`
**File:** `iPhone.php`, `Main.php`

**Screenshot:**

[SS Materi 01](img/01.png)

### Penjelasan

Materi pertama membahas konsep dasar **class dan object** menggunakan contoh `iPhone`.

Di dalam class `iPhone` terdapat dua property, yaitu `$color` untuk menyimpan warna dan `$storage` untuk menyimpan kapasitas penyimpanan.

Nilai property diberikan melalui constructor `__construct`. Constructor akan otomatis dijalankan ketika object dibuat menggunakan keyword `new`.

Contohnya, pada `Main.php` dibuat object `$iphone13` dan `$iphone14`. Kedua object tersebut berasal dari class yang sama, tetapi masing-masing dapat mempunyai nilai warna dan storage yang berbeda.

Property dan method pada object PHP menggunakan beberapa aturan sintaks yang berbeda dengan Java. PHP menggunakan tanda `$` pada nama variabel, operator `->` untuk mengakses property atau method object, dan tanda `.` untuk menggabungkan string.

Method `getColor()` dan `getStorage()` digunakan untuk mengambil nilai dari masing-masing property.

Jadi, materi ini menunjukkan bahwa **class berfungsi sebagai rancangan**, sedangkan object merupakan hasil dari class tersebut yang dapat digunakan dalam program.

---

## Materi 02 – Constructor

**Folder:** `02 Constructor/`
**File:** `Mahasiswa.php`, `Aplikasi.php`

**Screenshot:**

[SS Materi 02](img/02.png)

### Penjelasan

Pada materi ini, constructor diterapkan pada class `Mahasiswa`.

Class tersebut memiliki tiga property yang bersifat `private`, yaitu:

```text
$nama
$nim
$umur
```

Karena menggunakan `private`, property tidak dapat diakses secara langsung dari luar class. Untuk mengatur dan mengambil nilainya digunakan getter dan setter. Konsep ini berkaitan dengan **encapsulation**, yaitu membatasi akses langsung terhadap data object.

Java dapat mempunyai beberapa constructor dengan parameter yang berbeda melalui constructor overloading. PHP mempunyai cara yang berbeda sehingga pada contoh ini digunakan **default parameter**.

Dengan adanya nilai default, object tetap dapat dibuat walaupun tidak semua data diberikan.

Contohnya:

```php
new Mahasiswa();
```

akan menggunakan data bawaan yang sudah ditentukan pada constructor.

Sementara itu:

```php
new Mahasiswa("Nenden Nuraini", "4523210144", 17);
```

akan memberikan nama, NIM, dan umur secara langsung ketika object dibuat.

Method `tampilkanInfo()` kemudian digunakan untuk menampilkan informasi mahasiswa yang sudah disimpan di dalam object.

---

## Materi 03 – Inheritance (Pewarisan)

**Folder:** `03 inheritance/`

**File:** `BangunDatar.php`, `Lingkaran.php`, `Persegi.php`, `Segitiga.php`, `Mahasiswa.php`, `MahasiswaInternational.php`, `App.php`, `Main.php`

### Screenshot `App.php`

[SS Materi 03 App](img/03app.png)

### Screenshot `Main.php`

[SS Materi 03 Main](img/03main.png)

### Penjelasan

Inheritance atau pewarisan digunakan agar sebuah class dapat memperoleh property dan method dari class lainnya.

Pada contoh pertama terdapat `BangunDatar` sebagai class induk. Class tersebut kemudian diturunkan menjadi:

* `Lingkaran`
* `Persegi`
* `Segitiga`

Ketiga class tersebut mempunyai hubungan dengan `BangunDatar` melalui keyword `extends`.

Masing-masing bentuk dapat memiliki cara sendiri dalam menghitung luas dan keliling. Karena itu, method `luas()` dan `keliling()` dapat dibuat ulang pada class turunannya. Proses penggantian implementasi method ini disebut **overriding**.

Khusus pada `Segitiga`, method `keliling()` tidak dibuat ulang. Jadi ketika method tersebut dipanggil, program masih menggunakan method yang berasal dari class `BangunDatar`.

Selain contoh bangun datar, inheritance juga diterapkan pada data mahasiswa. `MahasiswaInternational` merupakan turunan dari `Mahasiswa` dan mempunyai tambahan property `$negaraAsal`.

Untuk tetap menggunakan constructor dari class induk, digunakan:

```php
parent::__construct(...)
```

Sedangkan:

```php
parent::tampilkanInfo()
```

digunakan ketika ingin menjalankan method milik class induk.

Pada bagian constructor `MahasiswaInternational`, penggunaan `...$args` membantu menangani beberapa kemungkinan jumlah argument karena PHP tidak menggunakan constructor overloading seperti pada Java.

Untuk membuat hasil perhitungan lebih mudah dibaca, nilai perhitungan luas dan keliling dapat dibulatkan menggunakan `round()`.

---

## Materi 04 – Polymorphism

**Folder:** `04 polymorphism/`
**File:** `Handphone.php`, `Smartphone.php`, `FeaturePhone.php`, `Main.php`

**Screenshot:**

[SS Materi 04](img/04.png)

### Penjelasan

Materi keempat membahas **polymorphism**, yaitu kemampuan beberapa object untuk menjalankan method yang sama dengan implementasi yang berbeda.

Class dasar yang digunakan adalah `Handphone`. Dari class tersebut dibuat dua turunan, yaitu:

```text
Handphone
├── Smartphone
└── FeaturePhone
```

`Smartphone` dan `FeaturePhone` sama-sama mempunyai method seperti `nyalakan()`, `matikan()`, dan `telepon()`. Namun isi method pada masing-masing class disesuaikan dengan karakteristik perangkatnya.

Contohnya, smartphone dapat melakukan proses booting dan video call, sedangkan feature phone lebih sederhana dan digunakan untuk komunikasi suara.

Pada `Main.php`, object dari kedua jenis handphone dimasukkan ke dalam array `$daftarHandphone`. Array tersebut kemudian diproses menggunakan perulangan.

Ketika kode:

```php
$hp->nyalakan();
```

dijalankan, PHP akan menentukan implementasi method berdasarkan object yang sedang diproses.

Selain itu, `instanceof` digunakan untuk mengetahui apakah sebuah object termasuk `Smartphone` atau `FeaturePhone`.

Dengan cara tersebut, method khusus seperti `aksesInternet()` dan `mainGameSnake()` hanya dipanggil pada object yang memang memiliki method tersebut.

Property `protected` digunakan agar property dapat digunakan oleh class turunan tanpa membuatnya dapat diakses langsung dari luar class.

---

## Materi 05 – Asosiasi, Agregasi, dan Komposisi

**Folder:** `05 asosiasikomposisi/`

**File:** `Dokter.php`, `Pasien.php`, `Tim.php`, `Pemain.php`, `Buku.php`, `Bab.php`, `Main.php`

**Screenshot:**

[SS Materi 05](img/05.png)

### Penjelasan

Materi ini membahas cara beberapa object saling berhubungan dalam pemrograman berorientasi objek. Terdapat tiga bentuk hubungan yang digunakan, yaitu **asosiasi, agregasi, dan komposisi**.

### 1. Asosiasi

Contoh asosiasi pada program adalah hubungan antara `Dokter` dan `Pasien`.

Dokter dapat menerima object pasien melalui parameter pada method:

```php
merawat($pasien)
```

Dalam hubungan ini, dokter dan pasien tidak bergantung satu sama lain untuk tetap menjadi object. Keduanya dapat dibuat secara terpisah.

### 2. Agregasi

Contoh berikutnya adalah hubungan antara `Tim` dan `Pemain`.

Object pemain dibuat terlebih dahulu kemudian diberikan kepada object tim.

Secara sederhana:

```text
Pemain dibuat
     ↓
Dimasukkan ke Tim
```

Karena object pemain dibuat di luar tim, pemain tetap dapat digunakan walaupun object tim tidak digunakan lagi.

### 3. Komposisi

Komposisi diterapkan pada hubungan `Buku` dan `Bab`.

Pada hubungan ini, object `Bab` dibuat sebagai bagian dari object `Buku`. Artinya, keberadaan bab berkaitan langsung dengan object buku yang membuatnya.

Perbedaan utama ketiganya dapat dilihat dari tingkat keterikatan antar-object:

| Jenis Hubungan | Contoh          | Tingkat Ketergantungan |
| -------------- | --------------- | ---------------------- |
| Asosiasi       | Dokter - Pasien | Rendah                 |
| Agregasi       | Tim - Pemain    | Sedang                 |
| Komposisi      | Buku - Bab      | Tinggi                 |

Pada saat melakukan konversi dari Java, struktur `List<Pemain>` dapat digantikan menggunakan `array` pada PHP.

---

## Materi 06 – Abstract Class dan Interface

**Folder:** `06 abstractinterface/`

**File:** `Vehicle.php`, `Movable.php`, `Fuelable.php`, `FuelableDefault.php`, `Car.php`, `Boat.php`, `Motor.php`, `Building.php`, `Main.php`

**Screenshot:**

[SS Materi 06](img/06.png)

### Penjelasan

Materi terakhir membahas beberapa konsep OOP yang digunakan untuk membuat struktur program menjadi lebih teratur, yaitu **abstract class**, **interface**, dan **trait**.

`Vehicle` digunakan sebagai abstract class yang menjadi dasar dari beberapa jenis object kendaraan.

Di dalamnya terdapat property `$name` dan method `showInfo()`.

Karena merupakan abstract class, `Vehicle` digunakan sebagai class dasar dan tidak dibuat menjadi object secara langsung.

Selanjutnya terdapat interface:

```text
Movable
Fuelable
```

Interface `Movable` menentukan bahwa class yang menggunakannya harus mempunyai method `move()`.

Sedangkan `Fuelable` menetapkan bahwa class yang menggunakannya harus menyediakan method `refuel()`.

`Car` dan `Boat` merupakan contoh class yang mewarisi `Vehicle` sekaligus mengimplementasikan kedua interface tersebut.

Pada `Boat`, method `refuel()` dapat dibuat khusus untuk menggambarkan proses pengisian bahan bakar kapal.

### Penggunaan Trait

Dalam Java terdapat konsep default method pada interface. Pada PHP, pendekatan tersebut tidak digunakan dengan cara yang sama.

Sebagai alternatif digunakan `FuelableDefault` dalam bentuk **trait**.

Trait tersebut menyediakan implementasi `refuel()` yang dapat digunakan kembali oleh class lain.

Pada `Motor`, trait digunakan dengan:

```php
use FuelableDefault;
```

Dengan begitu, `Motor` dapat memperoleh method `refuel()` dari trait tanpa harus membuat ulang method tersebut.

Sedangkan `Building` hanya mewarisi `Vehicle`. Karena tidak menggunakan `Movable` maupun `Fuelable`, class tersebut tidak memiliki kewajiban untuk menyediakan `move()` dan `refuel()`.

---

# Ringkasan Perbedaan Java dan PHP

| **Konsep**                         | **Java**                              | **PHP**                        |
| ---------------------------------- | ------------------------------------- | ------------------------------ |
| Constructor                        | Nama constructor mengikuti nama class | `__construct()`                |
| Mengakses object                   | `this.nama`                           | `$this->nama`                  |
| Menampilkan output                 | `System.out.println()`                | `echo ... . PHP_EOL;`          |
| Pewarisan                          | `extends`                             | `extends`                      |
| Memanggil constructor induk        | `super()`                             | `parent::__construct()`        |
| Constructor dengan beberapa bentuk | Overloading                           | Default parameter / `...$args` |
| Mengecek tipe object               | `instanceof`                          | `instanceof`                   |
| Casting object                     | Umumnya digunakan setelah pengecekan  | Tidak selalu diperlukan        |
| Default method                     | Dapat digunakan pada interface        | Dapat digantikan dengan trait  |
| List data                          | `List<T>` / `ArrayList`               | `array`                        |
| Akses member object                | `.`                                   | `->`                           |
| Penggabungan string                | `+`                                   | `.`                            |

---

# Kesimpulan

Dari seluruh materi yang dikerjakan, dapat dilihat bahwa Java dan PHP sama-sama mendukung konsep dasar **Object-Oriented Programming**. Perbedaannya lebih banyak terdapat pada aturan sintaks dan cara beberapa fitur diterapkan.

Materi pertama sampai terakhir menunjukkan proses penggunaan class, pembuatan object, constructor, pewarisan, polymorphism, hubungan antar-object, hingga abstract class dan interface.

Melalui konversi program dari Java ke PHP, konsep OOP tidak hanya dipahami dari sisi teori, tetapi juga dapat
