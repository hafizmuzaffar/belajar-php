<?php
function tukar_besar_kecil($string){
	$hasil = "";
	for ($i=0; $i <strlen ($string); $i++){
		$orde =ord ($string[$i]);
		if($orde >64 && $orde <91){
			$hasil .= chr($orde +32);
		} elseif ($orde >96 && $orde <123) {
			$hasil .= chr($orde -32);
			# code...
		}else{
			$hasil .= $string[$i];
		}
	}
	return $hasil;
//kode di sini
}

// TEST CASES
echo "<br>" . tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br>" . tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br>" . tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br>" . tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<br>" . tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>