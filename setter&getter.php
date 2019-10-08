<?php 


 //Jual Produk
// komik
// game

class Produk{
	private  $judul,
	 		 $penulis, 
	         $penerbit,
	         $diskon = 0,
  			 $harga;
	      

	       public function __construct($judul = "judul" ,  $penulis = "penulis",
	       $penerbit = "penerbit", $harga = 0) {

	       	$this ->judul = $judul;
	       	$this ->penulis =$penulis;
	       	$this ->penerbit =$penerbit;
	       	$this ->harga =$harga;

}

			public function setJudul($judul){
				$this->judul = $judul;
			}
	       	public function getJudul(){
	       		return $this ->judul;
	       	}
	       	public function setPenulis($penulis){
	       		$this->penulis =$penulis;
	       	}
	       	public function getPenulis(){
	       		return $this->penulis;
	       	}
	       		public function setPenerbit($penerbit){
	       		$this->penerbit =$penerbit;
	       	}
	       	public function getPenerbit(){
	       		return $this ->penerbit;
	       	}
	       	public function setDiskon($diskon){

			$this->diskon = $diskon;
			}
	       	public function getHarga(){

			return $this->harga - ($this->harga * $this ->diskon / 100);
			}
	       	


	       public function getLabel() {
	       	return "$this->penulis,$this->penerbit";
	       }


public function getInfoProduk(){

$str = " {$this ->judul} | {$this ->getLabel()} (Rp. {$this -> harga}) ";

return $str;
}


}



class Game extends Produk {
	public $waktuMain;
	public function __construct( $judul = "judul" ,  $penulis = "penulis",
	       $penerbit = "penerbit", $harga = 0 , $waktuMain = 0) {

	parent::__construct($judul ,  $penulis,
	       $penerbit, $harga);

$this->waktuMain = $waktuMain;

}

	public function getInfoProduk (){

		$str ="Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam. ";

		return $str;

	}

}



class Komik extends Produk {
	public $jmHalaman;
	public function __construct( $judul = "judul" ,  $penulis = "penulis",
	       $penerbit = "penerbit", $harga = 0 , $jmHalaman = 0) {


	parent::__construct($judul ,  $penulis,
	       $penerbit, $harga);

$this->jmHalaman = $jmHalaman;

	}
	public function getInfoProduk (){
		$str ="Komik : " . parent::getInfoProduk() ." - {$this->jmHalaman} Halaman. ";

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



$produk1 = new Komik("Naruto" , "Masashi Kishimoto", "Shonen Jump",300000,100);



// echo "Komik : $produk3->penulis, $produk3->penerbit" ;
// echo "<br>";
// echo $produk3 ->getLabel();

// echo "<hr>";

$produk2 = new Game("Uncharted" , "Neil Duckman" , "SONY Computer" ,2500000,50);


// Komik: Masashi Kishimoto,Shonen Jump
// game : Neil Duckman,SONY Computer
// Naruto | Masashi Kishimoto,Shonen Jump (Rp. 300000)

echo $produk1 ->getInfoProduk();
echo "<br>";
echo $produk2 ->getInfoProduk();
echo "<hr>";


$produk2 ->setDiskon(50);
echo $produk2 ->getHarga();

echo "<hr>";

echo $produk1->getJudul();
$produk1-> setPenulis ("Muhammad Reggy Nugraha");
echo "<br>";
echo $produk1->getPenulis();
// $produk3 = new Produk ("Barang Baru");
// echo $produk3 ->judul;






