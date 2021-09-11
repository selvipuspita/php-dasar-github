<?php
    echo "1. Pengulangan For <br> " ;
    echo "<br>";

    for ($i = 0; $i <= 10; $i++) {
        echo "Ini perulangan ke - $i <br>";
    }
    echo "<br>";
    echo "2. Pengulangan While <br>";
    echo "<br>";
    $ulangi = 0;
    while ($ulangi < 10) {
        echo "ini perulangan ke - $ulangi <br>";
        $ulangi++;
    }
    echo "<br>";
    echo "3. Perulangan Do-While <br>";
    echo "<br>";
    $ulangi = 0;
    do {
        echo "Ini perulangan ke - $ulangi <br> ";
        $ulangi++;
    }while ($ulangi < 10) ;
    echo "<br>";
    echo "4. Pengulangan Foreach <br>";
    echo "<br>";
    $books = [
        "Panduan belajar java untuk pemula<br>",
        "Membangun aplikasi Java denngan Netbeans<br>", 
        "Tutorial Java dan Mysql<br>",
        "Membuat Penggajian Desktop dengan Java<br>"
    ];
    echo "<h5> Judul Buku Java </h5>";
    echo "<ul>";
    foreach ($books as $buku) {
        echo "<li>$buku</li";
    }
    echo "</ul>";

