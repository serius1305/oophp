<?php 


require_once 'app/init.php';
$produk1 = new Komik("Naruto" , "Masashi Kishimoto", "Shonen Jump",300000,100);




$produk2 = new Game("Uncharted" , "Neil Duckman" , "SONY Computer" ,2500000,50);






$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
echo"<hr>";
new coba;

