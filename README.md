Nama : Muchamad Rava Alvriansyah
Matkul : PBO-A
Tugas PBO – Konversi Java ke PHP

Materi 01 – Class
Folder: 01 Class/ (iPhone.php, Main.php)

Screenshot:
<img width="957" height="548" alt="01" src="https://github.com/user-attachments/assets/eafbfd9f-4262-4240-a04c-4b663a4163fb" />
Penjelasan:

iPhone adalah class, yaitu cetakan yang mendefinisikan data ($color, $storage) dan perilaku (method) sebuah iPhone.
Method __construct() adalah constructor. Ia berjalan otomatis saat new iPhone("Red", "128GB") dipanggil dan langsung mengisi property. Di Java, constructor harus bernama sama dengan class-nya, sedangkan di PHP selalu __construct.
$this->color = $color; artinya "isi property color milik objek ini dengan nilai parameter $color". Setara dengan this.color = color; di Java.
Property biasanya dibuat private agar tidak diubah sembarangan dari luar (enkapsulasi). Untuk membacanya disediakan getter: getColor() dan getStorage().
Di Main.php, require_once 'iPhone.php' memuat file class. Ini mirip import di Java, tapi PHP memuat file secara langsung.
$iphone13 dan $iphone14 adalah dua objek dari satu class yang sama. Prosesnya disebut instantiation. Datanya terpisah: iPhone 13 berwarna Red/128GB, iPhone 14 berwarna Grey/256GB.
PHP_EOL dipakai untuk pindah baris, mirip \n atau System.out.println() di Java.
