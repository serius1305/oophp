<?php 


 //Jual Produk
// komik
// game

class Produk{
	public $judul,
	 		 $penulis, 
	       $penerbit ,
	       $harga,
	       $jmHalaman,
	       $waktuMain ;

	       public function __construct($judul = "judul" ,  $penulis = "penulis",
	       $penerbit = "penerbit", $harga = 0 , $jmHalaman = 0, $waktuMain = 0 ,$tipe) {

	       	$this ->judul = $judul;
	       	$this ->penulis =$penulis;
	       	$this ->penerbit =$penerbit;
	       	$this ->harga =$harga;
	       	$this ->jmHalaman = $jmHalaman;
	       	$this ->waktuMain = $waktuMain;
	       	$this ->tipe = $tipe;
	       	
	       	

	       }


	       public function getLabel() {
	       	return "$this->penulis,$this->penerbit";
	       }


public function getInfoLengkap(){

$str = "{$this->tipe} : {$this ->judul} | {$this ->getLabel()} ({Rp. {$this -> harga}) ";
if($this ->tipe == "Komik"){
	$str .= " - {$this -> jmHalaman} Halaman";
}else if ($this -> tipe == "Game"){
	$str .= " - {$this ->waktuMain} Jam.";
}
return $str;
}
}


class CetakInfoProduk {
	public function cetak ( Produk $produk){
		$str = "{$produk ->judul} | {$produk -> getLabel()} (Rp. {$produk -> harga})";
		return $str;
	}
}

// $produk1 = new Produk();
// $produk1 ->judul = "Naruto";

// $produk2 = new Produk();
// $produk2 ->judul ="Chess Rush";
// $produk2 ->tambahProperty="hahaha";

// var_dump($produk1);
// var_dump($produk2);



$produk1 = new Produk("Naruto" , "Masashi Kishimoto", "Shonen Jump",300000,100,0 ,"Komik");



// echo "Komik : $produk3->penulis, $produk3->penerbit" ;
// echo "<br>";
// echo $produk3 ->getLabel();

// echo "<hr>";

$produk2 = new Produk("Uncharted" , "Neil Duckman" , "SONY Computer" , 2500000,0,50, "Game");


// Komik: Masashi Kishimoto,Shonen Jump
// game : Neil Duckman,SONY Computer
// Naruto | Masashi Kishimoto,Shonen Jump (Rp. 300000)

echo $produk1 ->getInfoLengkap();
echo "<br>";
echo $produk2 ->getInfoLengkap();