<?php
$mahasiswaJSON = '{
  "1":{
    "NIM": 11124561,
    "Nama": "Si A",
    "Umur": "16 Tahun",
    "Email": "A@gmail.com"
  },
  "2":{
    "NIM": 12124562,
    "Nama": "Si B",
    "Umur": "17 Tahun",
    "Email": "B@gmail.com"
  },
  "3":{
    "NIM": 13124563,
    "Nama": "Si C",
    "Umur": "17 Tahun",
    "Email": "C@gmail.com"
  },
  "4":{
    "NIM": 14124564,
    "Nama": "Si D",
    "Umur": "18 Tahun",
    "Email": "D@gmail.com"
  },
  "5":{
    "NIM": 15124565,
    "Nama": "Si E",
    "Umur": "16 Tahun",
    "Email": "E@gmail.com"
  }
}';

$listmahasiswa = json_decode($mahasiswaJSON);
echo "<b>1. DANNY INDRA GUNAWAN</b> <p>";
foreach ($listmahasiswa as $key => $mhsw) {
  echo "NIM: {$mhsw->NIM} <br>";
  echo "Nama Mahasiswa: {$mhsw->Nama} <br>";
  echo "Umur: {$mhsw->Umur} <br>";
  echo "Email: {$mhsw->Email} <p>";
}

$mahasiswaJSON2 = '{
  "1":{
    "NIM": 11124561,
    "Nama": "Si A",
    "Umur": "16 Tahun",
    "Email": "A@gmail.com"
  },
  "2":{
    "NIM": 12124562,
    "Nama": "Si B",
    "Umur": "17 Tahun",
    "Email": "B@gmail.com"
  },
  "3":{
    "NIM": 13124563,
    "Nama": "Si C",
    "Umur": "17 Tahun",
    "Email": "C@gmail.com"
  },
  "4":{
    "NIM": 14124564,
    "Nama": "Si D",
    "Umur": "18 Tahun",
    "Email": "D@gmail.com"
  },
  "5":{
    "NIM": 15124565,
    "Nama": "Si E",
    "Umur": "16 Tahun",
    "Email": "E@gmail.com"
  }
}';

  $listmahasiswa = json_decode($mahasiswaJSON2);
  echo "<hr>";
echo "<b>2. MUHAMMAD SABAR</b> <p>";
foreach ($listmahasiswa as $key => $mhsw) {
  echo "NIM: {$mhsw->NIM} <br>";
  echo "Nama Mahasiswa: {$mhsw->Nama} <br>";
  echo "Umur: {$mhsw->Umur} <br>";
  echo "Email: {$mhsw->Email} <p>";
}

$mahasiswaJSON3 = '{
  "1":{
    "NIM": 11124561,
    "Nama": "Si A",
    "Umur": "16 Tahun",
    "Email": "A@gmail.com"
  },
  "2":{
    "NIM": 12124562,
    "Nama": "Si B",
    "Umur": "17 Tahun",
    "Email": "B@gmail.com"
  },
  "3":{
    "NIM": 13124563,
    "Nama": "Si C",
    "Umur": "17 Tahun",
    "Email": "C@gmail.com"
  },
  "4":{
    "NIM": 14124564,
    "Nama": "Si D",
    "Umur": "18 Tahun",
    "Email": "D@gmail.com"
  },
  "5":{
    "NIM": 15124565,
    "Nama": "Si E",
    "Umur": "16 Tahun",
    "Email": "E@gmail.com"
  }
}';

  $listmahasiswa = json_decode($mahasiswaJSON3);
  echo "<hr>";
echo "<b>3. TARSINAH SUMARNI</b> <p>";
foreach ($listmahasiswa as $key => $mhsw) {
  echo "NIM: {$mhsw->NIM} <br>";
  echo "Nama Mahasiswa: {$mhsw->Nama} <br>";
  echo "Umur: {$mhsw->Umur} <br>";
  echo "Email: {$mhsw->Email} <p>";
}

$mahasiswaJSON4 = '{
  "1":{
    "NIM": 11124561,
    "Nama": "Si A",
    "Umur": "16 Tahun",
    "Email": "A@gmail.com"
  },
  "2":{
    "NIM": 12124562,
    "Nama": "Si B",
    "Umur": "17 Tahun",
    "Email": "B@gmail.com"
  },
  "3":{
    "NIM": 13124563,
    "Nama": "Si C",
    "Umur": "17 Tahun",
    "Email": "C@gmail.com"
  },
  "4":{
    "NIM": 14124564,
    "Nama": "Si D",
    "Umur": "18 Tahun",
    "Email": "D@gmail.com"
  },
  "5":{
    "NIM": 15124565,
    "Nama": "Si E",
    "Umur": "16 Tahun",
    "Email": "E@gmail.com"
  }
}';

  $listmahasiswa = json_decode($mahasiswaJSON4);
  echo "<hr>";
echo "<b>4. SAEPUDIN</b> <p>";
foreach ($listmahasiswa as $key => $mhsw) {
  echo "NIM: {$mhsw->NIM} <br>";
  echo "Nama Mahasiswa: {$mhsw->Nama} <br>";
  echo "Umur: {$mhsw->Umur} <br>";
  echo "Email: {$mhsw->Email} <p>";
}