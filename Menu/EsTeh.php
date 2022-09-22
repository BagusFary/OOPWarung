<?php

class EsTeh extends Minuman {
    // Atribut harga sebagai harga EsTeh
    protected $harga = 3000;

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