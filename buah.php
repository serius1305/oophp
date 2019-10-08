<?php 
abstract class Buah {
	private $warna;

	abstract public function makanan(){

	}

	public function setWarna($warna){
		$this ->warna = $warna;
	}
}
class Apel extends Buah {
	public function makan(){

	}
}

class Jeruk extends Buah {
	public function makan (){

	}
}


