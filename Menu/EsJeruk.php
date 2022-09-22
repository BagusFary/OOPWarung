<?php

class EsJeruk extends Minuman{
    // Atribut harga sebagai harga EsJeruk
    protected $harga = 4000;
    
    // Menampilkan InfoMinuman
    public function InfoMinuman(){
        return "Minuman ". get_class($this) ;
    }

    // Method untuk menampilkan InfoMenu
    public function InfoMenu() {
        return get_class($this);
    }

}


?>