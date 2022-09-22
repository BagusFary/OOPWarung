<?php

// Digunakan untuk memanggil semua class yang ada di Folder "Menu" yang memiliki tipe file ".php"
spl_autoload_register(function($class) {
    require_once 'Menu/' . $class . '.php';
});


?>