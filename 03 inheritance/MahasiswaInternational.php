<?php

require_once 'Mahasiswa.php';

// Kelas MahasiswaInternational (Subclass) yang mewarisi Mahasiswa
class MahasiswaInternational extends Mahasiswa
{
    // Variabel tambahan untuk mahasiswa internasional
    private string $negaraAsal;

    /*
     * Constructor yang didukung (versi Java ada 3):
     *   new MahasiswaInternational()                          -> tanpa parameter
     *   new MahasiswaInternational(nama, nim, negaraAsal)     -> 3 parameter
     *   new MahasiswaInternational(nama, nim, umur, negara)   -> 4 parameter
     * Karena PHP tidak punya overloading, jumlah argumen dicek dengan func_get_args().
     */
    public function __construct(...$args)
    {
        switch (count($args)) {
            case 0:
                parent::__construct(); // Memanggil constructor parent tanpa parameter
                $this->negaraAsal = "Belum Diisi";
                break;
            case 3:
                [$nama, $nim, $negaraAsal] = $args;
                parent::__construct($nama, $nim); // Memanggil constructor parent dengan dua parameter
                $this->negaraAsal = $negaraAsal;
                break;
            case 4:
                [$nama, $nim, $umur, $negaraAsal] = $args;
                parent::__construct($nama, $nim, $umur); // Memanggil constructor parent dengan tiga parameter
                $this->negaraAsal = $negaraAsal;
                break;
            default:
                throw new InvalidArgumentException("Jumlah argumen constructor tidak valid.");
        }
    }

    // Getter dan Setter untuk negara asal
    public function getNegaraAsal(): string
    {
        return $this->negaraAsal;
    }

    public function setNegaraAsal(string $negaraAsal): void
    {
        $this->negaraAsal = $negaraAsal;
    }

    // Override method tampilkanInfo untuk menampilkan informasi tambahan
    public function tampilkanInfo(): void
    {
        parent::tampilkanInfo(); // Memanggil method tampilkanInfo dari parent
        echo "Negara Asal: " . $this->negaraAsal . PHP_EOL;
    }
}
