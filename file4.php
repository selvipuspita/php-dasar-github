<?php

    echo "Pemilihan Jurusan <br>" ;
    $jurusan = "rpl";
    switch ($jurusan) {
        case "rpl":
            echo "anda jurusan RPL";
            break;
        case "tbsm":
            echo "anda jurusan TBSM";
            break;
        case "tkr":
            echo "anda jurusan TKR";
            break;
        default:
            echo "jurusan tidak tersedia";
        }
?>