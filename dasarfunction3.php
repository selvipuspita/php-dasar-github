<?php
//Parameter dengan Nilai Default
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ",</br>";
    echo "Perkenalkan, nama saya " . $nama. "<br/>";
    echo "Senang berkenalan dengan anda <br/>";
}

perkenalan("Selvi Puspita Dewi", "Hi");
echo "<hr>";

$saya = "Piben";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya);
?>