<?php
$perusahaan = [
    'Nama' => 'Selvi Puspita Dewi',
    'Umur' => '17 Tahun',
    'Alamat' => 'Bojong Sukamukti',
    'Hobi' => ['Nonton Series' , 'Menyanyi'],
    'Media Sosial' => ['Instagram' => 'selviipuspita' , 'Facebook' => 'Selvi Puspitaa']
];

echo "<pre>";
print_r($perusahaan);

echo "<br>";
echo "Memanggil Array 2 Dimensi<br>";
echo $perusahaan['Hobi'][0]."<br>";
echo $perusahaan['Media Sosial']['Instagram'];