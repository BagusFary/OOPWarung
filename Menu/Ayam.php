<?php

class Ayam extends Makanan implements Sambal {
    // Atribut varian digunakan untuk input varian Ayam yang di inginkan
    // Atribut harga sebagai harga Ayam
    protected $varian,
                $harga = 10000;

    // Method construct untuk input varian yang diinginkan
    public function __construct($varian)
    {
        $this->varian = $varian;
    }

    // Overriding tambahPesanan untuk Ayam
    public function tambahPesanan(){
        $pesanan = $this->pesanan + 1;

        if($pesanan <= 3) {
            echo " 1 Pesanan {$this->varian} Ditambahkan Dengan Lalapan";
            $this->pesanan = $pesanan;
        } else {
            echo "Pesanan Terlalu Banyak,Maksimal 3 pesanan!";
        }

    }

    // Method dari abstract class Makanan
    public function InfoMakanan(){
        return $this->varian;
    }

    // Method interface Implementasi Sambal
    public function Sambal(){
        return "Sambal Ditambahkan";
    }

    // Method untuk menampilkan InfoMenu
    public function InfoMenu() {
        return get_class($this) . " Goreng ,Krispi, Bakar";
    }

}



?>