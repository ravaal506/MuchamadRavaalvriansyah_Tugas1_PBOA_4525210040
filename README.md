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

Materi 02 – Constructor
Folder: 02 Constructor/ (Mahasiswa.php, Aplikasi.php)

Screenshot:
<img width="932" height="554" alt="02" src="https://github.com/user-attachments/assets/376c389e-57fe-4486-ac6b-a86340cdd679" />

Penjelasan:

Mahasiswa adalah class yang mendefinisikan data ($nama, $nim, $umur) dan perilaku (getter, setter, dan tampilkanInfo()) seorang mahasiswa.
new Mahasiswa() memanggil constructor tanpa argumen, sehingga property memakai nilai default. Karena itu output pertama menampilkan Umur: 0, sedangkan nama dan NIM kosong.
setNama(), setNim(), dan setUmur() adalah setter, yaitu method untuk mengisi atau mengubah nilai property setelah objek dibuat. Hasilnya dibaca lagi dengan getter: getNama(), getNim(), dan getUmur().
$soja->setNama("Soja Purnamasari"); artinya "isi property nama milik objek $soja dengan nilai tersebut". Setara dengan soja.setNama("Soja Purnamasari"); di Java.
new Mahasiswa("Nenden Nuraini", "4523210144", 17) adalah constructor lengkap. Semua data langsung diisi saat objek dibuat, tanpa perlu setter, lalu ditampilkan lewat tampilkanInfo().
Di Java, dua cara pembuatan objek ini memakai dua constructor berbeda (overloading). Di PHP tidak ada overloading constructor, jadi cukup satu __construct() dengan parameter default, misalnya $nama = "" dan $umur = 0.
$soja dan $nenden adalah dua objek dari satu class yang sama. Datanya terpisah: Soja berumur 15 dan Nenden berumur 17.
Perbedaan format output: Nama : (ada spasi sebelum titik dua) berasal dari echo di Aplikasi.php, sedangkan Nama: (tanpa spasi) berasal dari method tampilkanInfo() di Mahasiswa.php.

Materi 03 – Inheritance (Pewarisan)
Folder: 03 inheritance/ (BangunDatar.php, Lingkaran.php, Persegi.php, Segitiga.php, Mahasiswa.php, MahasiswaInternational.php, App.php, Main.php)

Screenshot App.php (bangun datar):
<img width="954" height="551" alt="03 app" src="https://github.com/user-attachments/assets/c3fbeaec-4ebb-4cf7-9e95-3e7c485d1f4f" />

Screenshot Main.php (mahasiswa internasional):
<img width="959" height="535" alt="03 main" src="https://github.com/user-attachments/assets/4b188e5a-21fe-40e9-8754-749ade14b74c" />
Penjelasan:

Inheritance (pewarisan) adalah mekanisme di mana class anak otomatis memiliki property dan method class induk. Di PHP ditulis dengan extends, sama seperti di Java.
Pada folder bangun datar, BangunDatar menjadi class induk, sedangkan Lingkaran, Persegi, dan Segitiga adalah class anak. Induk menyediakan kerangka umum (luas() dan keliling()), lalu tiap anak mengisinya dengan rumus sendiri.
Overriding terjadi saat class anak menulis ulang method dengan nama yang sama seperti milik induk. Contohnya luas() pada Lingkaran memakai rumus πr², sedangkan pada Persegi memakai sisi × sisi.
Segitiga hanya meng-override luas(), tidak keliling(). Akibatnya, saat keliling() dipanggil, PHP menjalankan versi milik induk dan mencetak pesan "Menghitung keliling bangun datar". Ini bukti bahwa method yang tidak ditimpa tetap diwarisi.
round() dipakai pada hasil lingkaran untuk membulatkan ke 2 angka di belakang koma, karena nilai π menghasilkan desimal yang panjang.
Pada folder mahasiswa, MahasiswaInternational extends Mahasiswa mewarisi $nama, $nim, $umur, lalu menambah property baru $negaraAsal yang khusus untuk mahasiswa asing.
parent::__construct(...) memanggil constructor induk agar data dasar (nama, NIM, umur) diisi oleh class induk, sehingga tidak perlu menulis ulang. Setara dengan super(...) di Java.
parent::tampilkanInfo() menjalankan method induk terlebih dahulu, lalu class anak menambahkan baris info negara asal. Ini cara memperluas method tanpa menulis ulang semuanya.
PHP tidak punya constructor overloading seperti Java. Sebagai gantinya, constructor MahasiswaInternational memakai ...$args untuk menampung semua argumen sebagai array, lalu count($args) dicek (0, 3, atau 4 argumen) untuk menentukan cara mengisi datanya.

Materi 04 – Polymorphism
Folder: 04 polymorphism/ (Handphone.php, Smartphone.php, FeaturePhone.php, Main.php)

Screenshot:
<img width="451" height="170" alt="04" src="https://github.com/user-attachments/assets/a214fbdb-94c5-48ea-af0d-c0e01345c9d2" />
Penjelasan:

Polymorphism berarti "banyak bentuk". Satu nama method yang sama bisa menghasilkan perilaku berbeda, tergantung objek yang memanggilnya.
Handphone adalah class induk yang mendefinisikan perilaku umum (nyalakan(), matikan(), telepon()). Smartphone dan FeaturePhone adalah class anak yang meng-override ketiga method tersebut sesuai karakter masing-masing. Smartphone menjalani proses booting dan mendukung video call, sedangkan feature phone hanya melakukan panggilan suara.
Pada Main.php, semua objek dikumpulkan dalam satu array $daftarHandphone. Saat di-loop, kode cukup menulis $hp->nyalakan() tanpa peduli jenis objeknya. PHP sendiri yang memilih versi method yang sesuai. Inilah inti polymorphism: satu pemanggilan, banyak hasil.
Method khusus tidak bisa dipanggil sembarangan karena tidak semua Handphone punya method itu. aksesInternet() hanya ada di Smartphone, dan mainGameSnake() hanya ada di FeaturePhone. Karena itu dipakai instanceof untuk mengecek jenis objek terlebih dahulu sebelum memanggilnya.
Di Java, setelah instanceof biasanya perlu casting (misalnya ((Smartphone) hp).aksesInternet()). Di PHP hal itu tidak diperlukan, method bisa langsung dipanggil.
Property dibuat protected supaya tetap terlindungi dari akses luar, tetapi masih bisa dipakai oleh class turunan. Kalau private, class anak tidak bisa mengaksesnya.

Materi 05 – Asosiasi, Agregasi, dan Komposisi
Folder: 05 asosiasikomposisi/ (Dokter.php, Pasien.php, Tim.php, Pemain.php, Buku.php, Bab.php, Main.php)

Screenshot:
<img width="456" height="146" alt="05" src="https://github.com/user-attachments/assets/6930d899-9540-4ea1-929d-ba083355ef35" />

Penjelasan:

Asosiasi, Agregasi, dan Komposisi adalah tiga jenis hubungan antar class. Bedanya ada pada seberapa kuat satu objek bergantung pada objek lainnya.
Asosiasi (Dokter dan Pasien) adalah hubungan paling longgar, bersifat "menggunakan". Dokter tidak menyimpan Pasien sebagai bagian dari dirinya. Objek Pasien hanya dikirim sementara lewat parameter method merawat($pasien). Setelah method selesai, hubungan itu selesai, dan keduanya tetap hidup mandiri.
Agregasi (Tim dan Pemain) adalah hubungan "memiliki" yang masih longgar. Objek Pemain dibuat di luar Tim, lalu dimasukkan lewat method atau constructor. Tim hanya menyimpan referensinya. Jika Tim dihapus, objek Pemain tetap ada dan bisa dipakai di tim lain.
Komposisi (Buku dan Bab) adalah hubungan "memiliki" yang paling kuat. Objek Bab dibuat di dalam constructor Buku, sehingga Bab tidak bisa berdiri sendiri. Saat $buku = null dan objeknya dibersihkan, bab-babnya ikut hilang.
Cara cepat membedakan agregasi dan komposisi: lihat di mana objek bagian dibuat. Dibuat di luar lalu dimasukkan berarti agregasi. Dibuat di dalam class pemilik berarti komposisi.
Di Java, kumpulan objek biasanya memakai List<Pemain> atau ArrayList. Di PHP cukup memakai array biasa, misalnya private array $pemain = []; lalu $this->pemain[] = $pemain;.


Materi 06 – Abstract Class dan Interface
Folder: 06 abstractinterface/ (Vehicle.php, Movable.php, Fuelable.php, FuelableDefault.php, Car.php, Boat.php, Motor.php, Building.php, Main.php)

Screenshot:
<img width="1376" height="264" alt="06" src="https://github.com/user-attachments/assets/22998820-1d5c-4e8c-87c1-eaf92623f048" />

Penjelasan:

Abstract class Vehicle adalah kerangka dasar untuk semua objek di folder ini. Ia menyimpan data umum ($name) dan method showInfo(). Karena bersifat abstrak, ia tidak bisa dibuat langsung dengan new Vehicle(). Class ini hanya berfungsi sebagai induk yang diwarisi class lain.
Interface adalah kontrak yang hanya berisi nama method, tanpa isi. Movable mewajibkan adanya move(), dan Fuelable mewajibkan adanya refuel(). Class yang implements interface harus menulis isi semua method tersebut, kalau tidak PHP akan menampilkan error.
Car dan Boat mewarisi Vehicle sekaligus mengimplementasikan Movable dan Fuelable. Jadi keduanya punya showInfo() dari induk, serta move() dan refuel() yang ditulis sendiri. Boat punya refuel() khusus untuk kapal, sehingga pesannya berbeda dari mobil.
Perbedaan penting dari Java: interface di PHP tidak bisa memiliki default method (method dengan isi bawaan). Sebagai gantinya dipakai trait, yaitu kumpulan method yang bisa "ditempelkan" ke class. Trait FuelableDefault berisi refuel() bawaan dengan pesan "Mengisi bahan bakar umum."
Motor memakai trait tersebut lewat use FuelableDefault;, sehingga tidak perlu menulis ulang refuel(). Kontrak Fuelable tetap terpenuhi karena method-nya sudah dibawa oleh trait.
Building hanya mewarisi Vehicle dan tidak mengimplementasikan interface apa pun. Akibatnya ia hanya punya showInfo(), tanpa move() dan refuel(). Memanggil kedua method itu pada Building akan menimbulkan error, dan itulah alasan kedua barisnya dikomentari di Main.php.

Hal	Java	PHP
Variabel	String color (wajib tulis tipe)	$color (diawali $)
Akses method/property	obj.getColor()	$obj->getColor()
Gabung string	"a" + "b"	"a" . "b"
Cetak	System.out.println()	echo
Pindah baris	\n / println	PHP_EOL
Referensi diri	this.color	$this->color
Akses method statis / induk	Kelas.method() / super.method()	Kelas::method() / parent::method()
