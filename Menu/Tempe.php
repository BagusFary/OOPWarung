<?php

class Tempe extends Makanan implements Sambal {
    // Atribut varian digunakan untuk input varian Tempe yang di inginkan
    // Atribut harga sebagai harga Tempe
    protected $varian,
                $harga = 5000;

    // Method construct untuk input varian yang diinginkan
    public function __construct($varian)
    {
       $this->varian = $varian;
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
        return get_class($this) . " Goreng";
    }

}


?>