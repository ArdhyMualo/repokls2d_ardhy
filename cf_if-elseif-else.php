<?php

$nilai = 39;

if ($nilai>=80 && $nilai <=100) {
	echo "Nilai A";
} elseif ($nilai>=65 && $nilai <=79) {
	echo "Nilai B";
} elseif ($nilai>=50 && $nilai <=64) {
	echo "Nilai C";
}elseif ($nilai>=40 && $nilai <=49) {
	echo "Nilai D";
}else{
	echo "Maaf anda tidak lulus, Nilai Anda E";
}


?>