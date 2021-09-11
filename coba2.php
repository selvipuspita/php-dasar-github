<?php

$json = '{"dosen 1" : "Danny Indra Gunawan",
        "Mahasiswa 1" : {"Nim" : "1","Nama" : "Aceng David","Umur" : "17", "Email" : "cenggdavid"},
        "Mahasiswa 2" : {"Nim" : "2","Nama" : "Kim Seoh-may","Umur" : "17", "Email" : "seoh-may"},
        "Mahasiswa 3" : {"Nim" : "3","Nama" : "Siti Yameti","Umur" : "17", "Email" : "yamett"},
        "Mahasiswa 4" : {"Nim" : "4","Nama" : "Abdullah Malik","Umur" : "17", "Email" : "dullahmalik"},
        "Mahasiswa 5" : {"Nim" : "5","Nama" : "Lara gon","Umur" : "17", "Email" : "laragon"},
        "dosen 2" : "Muhammad Sabar",
            "mahasiswa 1" : {"Nim" : "1","Nama" : "Joo Seok-Kyung","Umur" : "17", "Email" : "sibadas"},
            "mahasiswa 2" : {"Nim" : "2","Nama" : "Joo Seok-Hoon","Umur" : "17", "Email" : "anakmamii"},
            "mahasiswa 3" : {"Nim" : "3","Nama" : "Min Seol-A","Umur" : "17", "Email" : "sol-an"},
            "mahasiswa 4" : {"Nim" : "4","Nama" : "Bae Ro-Na","Umur" : "17", "Email" : "ronayaa"},
            "mahasiswa 5" : {"Nim" : "5","Nama" : "Ha Eun-Byeol","Umur" : "17", "Email" : "bebanortu"},
            "dosen 3" : "Tarsinah Sumarni",
            "maha siswa 1" : {"Nim" : "1","Nama" : "Shaka","Umur" : "17", "Email" : "anakayahbunda"},
            "maha siswa 2" : {"Nim" : "2","Nama" : "Rafathar","Umur" : "17", "Email" : "rafatharsultann"},
            "maha siswa 3" : {"Nim" : "3","Nama" : "Putri Malu","Umur" : "17", "Email" : "putrayy"},
            "maha siswa 4" : {"Nim" : "4","Nama" : "Aci Resti","Umur" : "17", "Email" : "acii"},
            "maha siswa 5" : {"Nim" : "5","Nama" : "Java Script","Umur" : "17", "Email" : "json"},
            "dosen 4" : "Saepuddin",
            "siswa 1" : {"Nim" : "1","Nama" : "Manaska","Umur" : "17", "Email" : "manaskaa"},
            "siswa 2" : {"Nim" : "2","Nama" : "Lengkara","Umur" : "17", "Email" : "lengkaraa"},
            "siswa 3" : {"Nim" : "3","Nama" : "Septihan","Umur" : "17", "Email" : "asep"},
            "siswa 4" : {"Nim" : "4","Nama" : "Cakrawala","Umur" : "17", "Email" : "cakraa"},
            "siswa 5" : {"Nim" : "5","Nama" : "Yudhistira Januar","Umur" : "17", "Email" : "januaryudhistira"}}';

        echo "<pre>";
        print_r(json_decode($json));
        echo "</pre>";