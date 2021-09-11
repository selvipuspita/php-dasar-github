<?php

	echo "<h2>Program Konversi Waktu</h2><br>";
	$waktu = 375;
	$pemilihan = "hari";
	$hari = floor ($waktu / 86400);
	$jam = floor ($waktu / 3600);
	$menit = ($waktu / 60) ;
	$detik = $waktu;

	if ($pemilihan == "hari") {
		echo "$waktu detik adalah $hari Hari <br> $jam Jam <br> dan $menit Menit <br> $detik Detik";
	}else {
		echo "Tidak ada waktu";
	}
?>