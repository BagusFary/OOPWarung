<?php

class CetakInfoMenu{
    // atribut menu dengan array kosong untuk menampung data
    public $menu = [];

    // Method untuk menambahkan menu makanan
    public function tambahMenuMakanan(Makanan $makanan) {
        $this->menu[] = $makanan;
    }

    // Method untuk menambahkan menu minuman
    public function tambahMenuMinuman(Minuman $minuman) {
        $this->menu[] = $minuman;
    }

    // Method untuk mencetak Menu setelah ditambahkan melalui method tambahMenuMakanan/tambahMenuMinuman
    public function CetakMenu() {
        $str = "Menu Makanan dan Minuman : <br>";

        // Perulangan atribut menu yang menampung data agar bisa ditampilkan satu per satu
        foreach( $this->menu as $m) {
            $str .= "- {$m->InfoMenu()} <br>";
        }

        return $str;
    }

}



?>