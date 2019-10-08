<?php 


 //Jual Produk
// komik
// game
interface InfoProduk{
	public function getInfoProduk();
}

 Abstract class Produk{
	protected  $judul,
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


 
abstract public function getInfo ();
}




class Game extends Produk implements InfoProduk {
	public $waktuMain;
	public function __construct( $judul = "judul" ,  $penulis = "penulis",
	       $penerbit = "penerbit", $harga = 0 , $waktuMain = 0) {

	parent::__construct($judul ,  $penulis,
	       $penerbit, $harga);

$this->waktuMain = $waktuMain;

}
public function getInfo(){

$str = " {$this ->judul} | {$this ->getLabel()} (Rp. {$this ->harga}) ";

return $str;
}

	public function getInfoProduk (){

		$str ="Game : ". $this->getInfo() . " - {$this->waktuMain} Jam. ";

		return $str;

	}

}



class Komik extends Produk implements InfoProduk {
	public $jmHalaman;
	public function __construct( $judul = "judul" ,  $penulis = "penulis",
	       $penerbit = "penerbit", $harga = 0 , $jmHalaman = 0) {


	parent::__construct($judul ,  $penulis,
	       $penerbit, $harga);

$this->jmHalaman = $jmHalaman;

	}


	public function getInfo(){

$str = " {$this ->judul} | {$this ->getLabel()} (Rp. {$this ->harga}) ";

return $str;
}

	 public function getInfoProduk (){
		$str ="Komik : " . $this->getInfo() . " - {$this->jmHalaman} Halaman. ";

		return $str;

	}

}


class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk(Produk $produk){
		$this -> daftarProduk[] = $produk;
	}

	public function cetak (){
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p) {
			$str .= "-{$p->getInfoProduk()} <br>";
		}
		return $str;
	}
}

$produk1 = new Komik("Naruto" , "Masashi Kishimoto", "Shonen Jump",300000,100);




$produk2 = new Game("Uncharted" , "Neil Duckman" , "SONY Computer" ,2500000,50);






$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();


	// $test = new Produk();