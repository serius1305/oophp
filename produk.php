<?php 


 //Jual Produk
// komik
// game

class Produk{
	public $judul = "judul";
	public $penulis = "penulis",
	       $penerbit = "penerbit",
	       $harga = 0;


	       public function getLabel() {
	       	return "$this->penulis,$this->penerbit";
	       }


}

$produk1 = new Produk();
$produk1 ->judul = "Naruto";

$produk2 = new Produk();
$produk2 ->judul ="Chess Rush";
$produk2 ->tambahProperty="hahaha";

var_dump($produk1);
var_dump($produk2);



$produk3 = new Produk();
$produk3 ->judul = "Naruto";
$produk3 ->penulis = "Masashi Kishimoto";
$produk3 ->penerbit = "Shonen Jump";
$produk3 ->harga = 30000;


// echo "Komik : $produk3->penulis, $produk3->penerbit" ;
// echo "<br>";
// echo $produk3 ->getLabel();

// echo "<hr>";

$produk4 = new Produk();
$produk4 ->judul = "Uncharted";
$produk4 ->penulis = "Neil Duckman";
$produk4 ->penerbit = "SONY Computer";
$produk4 ->harga = 250000;


echo "Komik: " . $produk3 -> getLabel();
echo "<br>";
echo "game : ". $produk4 -> getLabel();

 