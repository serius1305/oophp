<?php 


// define ('NAMA', 'Reggy');

// echo NAMA;
// echo "<br>";
// const UMUR = 19;
// echo UMUR;


// class Coba {
// 	const NAMA = 'Reggy';
// }

// echo Coba::NAMA;





// echo __LINE__;

class Coba{
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj -> kelas;