<?php
// Memanggil Autoloader
require_once 'autoload.php';

// Instance
$Ayam = new Ayam("Ayam Goreng");
$Tempe = new Tempe("Tempe Goreng");
$EsJeruk = new EsJeruk();
$EsTeh = new EsTeh();
$Menu = new CetakInfoMenu();

// Menu
$Menu->tambahMenuMakanan($Ayam);
$Menu->tambahMenuMakanan($Tempe);
$Menu->tambahMenuMinuman($EsJeruk);
$Menu->tambahMenuMinuman($EsTeh);
echo $Menu->CetakMenu();



echo "<hr>";


// Pesanan Ayam
echo $Ayam->tambahPesanan();
echo "<br>";
echo $Ayam->tambahPesanan();
echo "<br>";
echo $Ayam->tambahPesanan();
echo "<br>";
echo $Ayam->tambahPesanan();
echo "<br>";
echo $Ayam->Sambal();
echo "<br>";
echo $Ayam->getJumlahPesanan();
echo "<br>";
echo $Ayam->harga();
echo "<br>";


echo "<hr>";

// Pesanan Tempe
echo $Tempe->tambahPesanan();
echo "<br>";
echo $Tempe->tambahPesanan();
echo "<br>";
echo $Tempe->Sambal();
echo "<br>";
echo $Tempe->getJumlahPesanan();
echo "<br>";
echo $Tempe->harga();
echo "<br>";

echo "<hr>";

// Pesanan EsJeruk
echo $EsJeruk->tambahPesanan();
echo "<br>";
echo $EsJeruk->tambahPesanan();
echo "<br>";
echo $EsJeruk->getJumlahPesanan();
echo "<br>";
echo $EsJeruk->harga();

echo "<hr>";

// Pesanan EsTeh
echo $EsTeh->tambahPesanan();
echo "<br>";
echo $EsTeh->tambahPesanan();
echo "<br>";
echo $EsTeh->getJumlahPesanan();
echo "<br>";
echo $EsTeh->harga();



echo "<hr>";

// Total Semua Harga 
echo "Total Harga yang harus dibayar adalah Rp.". ($Tempe->totalHarga() + $Ayam->totalHarga() + $EsJeruk->totalHarga() + $EsTeh->totalHarga());


?>