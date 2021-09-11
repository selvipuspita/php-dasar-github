<?php

    echo "Grade Penilaian <br>";
    $nilai = 102;
    
    if  ($nilai <= 100 && $nilai >= 90) {
        echo "Nilai anda A" ;
    }elseif  ($nilai <= 100 && $nilai >= 80) {
        echo "Nilai anda B" ;
    }elseif  ($nilai <= 100 && $nilai >= 75)  {
        echo "Nilai anda C" ;
    }elseif  ($nilai <= 100 && $nilai >= 60)  {
        echo "Nilai anda D" ;
    }elseif  ($nilai <= 100 && $nilai <= 60 && $nilai >= 0)  {
        echo "Nilai anda C" ;
    }else{
        echo "Tidak ada nilai";
    }
?>