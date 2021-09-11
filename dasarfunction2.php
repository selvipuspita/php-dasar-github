<?php
//fungsi dengan parameter

function perkenalan($nama, $salam){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."</br>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Selvi Puspita Dewi", "Hi");
echo "<hr>";

$saya = "Piben";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya, $ucapanSalam);
?>