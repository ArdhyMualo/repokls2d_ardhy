<?php 
function penjumlahan($a, $b){
	$hasil = $a + $b;
	return $hasil;
}

echo "Hasil = ".penjumlahan (4, 5);
echo "<hr>";

function cek($bil){
	if ($bil<0)
		return "negatif";
	else if ($bil>0)
		return "positif";
	else
		return "nol";
}

echo "Cek bil = ".cek(4);
 ?>

