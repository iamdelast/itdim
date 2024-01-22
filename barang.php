<?php
class Barang {
    public $nama;
    public $warna;
    public $harga;   // Harga per unit
    public $jumlah;  // Jumlah unit yang terjual

    function __construct($nama, $warna, $harga, $jumlah) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->jumlah = $jumlah;
    }

    function getNama() {
        return $this->nama;
    }

    function getWarna() {
        return $this->warna;
    }

    function getPendapatan() {
        return $this->harga * $this->jumlah;
    }

    function getBiaya() {
        // Tambahkan logika perhitungan biaya jika diperlukan
        return 0;
    }

    function hitungKeuntunganKerugian() {
        $keuntunganKerugian = $this->getPendapatan() - $this->getBiaya();
        return $keuntunganKerugian;
    }
}

// Contoh penggunaan
$apel = new Barang("Apel", "Merah", 2.5, 100);
$jeruk = new Barang("Jeruk", "Orange", 1.8, 150);

$totalKeuntunganKerugian = $apel->hitungKeuntunganKerugian() + $jeruk->hitungKeuntunganKerugian();

echo "Total Keuntungan/Kerugian: $totalKeuntunganKerugian";
?>
