<?php
        echo "1. Contoh Program Array Numeric <br>";
        $jurusan = array("Jurusan Teknik Informatika", "Jurusan Sistem Informasi", "Jurusan Teknik Komputer", "Jurusan Manajemen Matematika");

        $jurusan_jumlah = count($jurusan);
        for ($i = 0; $i < $jurusan_jumlah; $i++) {
            echo "Jurusan $jurusan[$i] - ada di index $i";
            echo "<br>";
        }
        $pilihan = array("Teknik Informatika", "Sistem Informasi", "Teknik Komputer", "Manajemen Matematika");
        echo "<br>";
        echo "2. Contoh Program Array Asosiatif <br>";
        foreach ($pilihan as $key => $value) {
            echo "Kata Kunci Index = jurusan$key, Nilai = $value";
            echo "<br>";
        }
        ?>