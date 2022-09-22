<?php

abstract class Minuman {
    protected $pesanan = 0;
                
    // Menambahkan Pesanan Minuman
    public function tambahPesanan(){
        $pesanan = $this->pesanan + 1;

        if($pesanan <= 3) {
            echo " 1 Pesanan ". get_class($this) ." Ditambahkan";
            $this->pesanan = $pesanan;
        } else {
            echo "Pesanan Terlalu Banyak,Maksimal 3 pesanan!";
        }

    }

    // Mengurangi Pesanan Minuman    
    public function kurangiPesanan(){
        $pesanan = $this->pesanan - 1;

        if($pesanan >= 0) {
            echo "1 Pesanan Dikurangi";
            $this->pesanan = $pesanan;
        } else {
            echo "Tidak Ada Pesanan";
        }
    }

    // Menampilkan Jumlah Pesanan Minuman
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
    abstract function InfoMinuman();

}


?>