<?php

$makanan = "bakso";

switch ($makanan) {
	case 'rujak':
		echo "Rujak Adalah makanan olahan dari buah2 pilihan dengan bumbu kacang yang menawan sehingga mengetarkan lidah. rujak yang enak dapat di beli di depan kejaksaan";
		break;
	
	case 'bakso':
		echo "bakso adalah makanan dari perpaduan mie yang kenyal dan daging olahan yang dibuat berbentuk bulat2 dengan kuah yang kental, bakso terenak berada di bakso nuklir depan RSUD wakanda";
		break;

	case 'nasi goreng':
		echo "nasi goreng adalah makanan berbentuk nasi yang digoreng dadakan. nasi goreng paling wuenaakk berada di depan toko istana";
		break;

	default:
		echo "Semua makanan tidak ada yang";
		break;
}

?>