<?php
class mobil
{
    public string $nama;
    public string $merk;
    public int $tahun;

    // Konstruktor yang benar
    public function __construct(string $nama, string $merk, int $tahun) {
        $this->nama = $nama;
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    function infoMobil() {
        return "Nama Mobil: $this->nama<br>" .
               "Merk: $this->merk<br>" .
               "Tahun: $this->tahun<br>";
    }

    function tambahKecepatan() {
        echo "Kecepatan bertambah!";
    }
}
?>