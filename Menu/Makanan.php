<?php

abstract class Makanan {
    protected $pesanan = 0;
                
    // Menambahkan Pesanan Makanan
    public function tambahPesanan(){
        $pesanan = $this->pesanan + 1;

        if($pesanan <= 3) {
            echo " 1 Pesanan {$this->varian} Ditambahkan";
            $this->pesanan = $pesanan;
        } else {
            echo "Pesanan Terlalu Banyak,Maksimal 3 pesanan!";
        }

    }

    // Mengurangi Pesanan Makanan
    public function kurangiPesanan(){
        $pesanan = $this->pesanan - 1;

        if($pesanan >= 0) {
            echo "1 Pesanan Dikurangi";
            $this->pesanan = $pesanan;
        } else {
            echo "Tidak Ada Pesanan";
        }
    }

    // Menampilkan Jumlah Pesanan Makanan
    public function getJumlahPesanan(){
        return "Jumlah Pesanan ". get_class($this) ." ({$this->pesanan}) <br>";
    }

    // Menampilkan Jumlah Harga untuk Class itu sendiri / yang di instance
    public function harga(){
        return "Total Harga ". get_class($this) . " Rp.". ($this->harga * $this->pesanan);
    }

    // method ini digunakan untuk penjumlahan Total Semua Harga di App.php
    public function totalHarga(){
        return  $this->harga * $this->pesanan; 
    }

    // method abstract yang digunakan di childclass
    abstract function InfoMakanan();

}



?>