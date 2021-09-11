<?php 

    echo "Bilangan ganjil genap <br>";
    $bil = 10;
    if ($bil % 2 == 0) {
        echo "$bil adalah bilangan genap";
    }else {
        echo "$bil adalah bilangan ganjil";
    }
    echo "<br>";
    if ($bil >= 0) {
        echo "Bilangan ini bilangan Positif";
    }else {
        echo "Bilangan ini bilangan Negatif";
    }
?>