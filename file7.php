<?php

    echo "Mengubah Celcius menjadi Reamur, Fahrenheit dan Kelvin <br>";
    $suhu = 10;
    $konversi = "fahrenheit";
    $reamur = 4/5 * $suhu ;
    $fahrenheit = 9/5 * $suhu + 32;
    $kelvin = $suhu +273;
    
    if ($konversi == "reamur") {
        echo "Hasil konversi ke Reamur : $reamur" ;
    }elseif ($konversi == "fahrenheit") {
        echo "Hasil konversi ke Fahrenheit : $fahrenheit" ;
    }elseif ($konversi == "kelvin") {
        echo "Hasil konversi ke Kelvin : $kelvin" ;
    }else{
        echo "Tidak memilih suhu";
    }
?>