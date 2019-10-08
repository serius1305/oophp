<?php 


 //Jual Produk
// komik
// game

class Produk{
	public $judul,
	 		 $penulis, 
	       $penerbit ,
	       $harga ;

	       public function __construct($judul = "judul" ,  $penulis = "penulis",
	       $penerbit = "penerbit", $harga = 0) {

	       	$this ->judul = $judul;
	       	$this ->penulis =$penulis;
	       	$this ->penerbit =$penerbit;
	       	$this ->harga =$harga;
	       	
	       	

	       }


	       public function getLabel() {
	       	return "$this->penulis,$this->penerbit";
	       }


}

// $produk1 = new Produk();
// $produk1 ->judul = "Naruto";

// $produk2 = new Produk();
// $produk2 ->judul ="Chess Rush";
// $produk2 ->tambahProperty="hahaha";

// var_dump($produk1);
// var_dump($produk2);



$produk1 = new Produk("Naruto" , "Masashi Kishimoto", "Shonen Jump",300000);



// echo "Komik : $produk3->penulis, $produk3->penerbit" ;
// echo "<br>";
// echo $produk3 ->getLabel();

// echo "<hr>";

$produk2 = new Produk("Uncharted" , "Neil Duckman" , "SONY Computer" , 2500000);
$produk3 = new Produk("Idiot ALien");

echo "Komik: " . $produk1 -> getLabel();
echo "<br>";
echo "game : ". $produk2 -> getLabel();
echo "<br>";
var_dump($produk3);

 