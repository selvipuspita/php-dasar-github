<?php
//Memanggil Fungsi di dalam Fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", </br>";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Saya berusia ". hitungUmur(1994, 2015) ." tahun<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}
perkenalan("Selvi Puspita Dewi");

?>
