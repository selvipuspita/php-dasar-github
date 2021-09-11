<html>
<head>
       <title>Data Siswa</title>
</head>
    <h1><center>Menampilkan Data Siswa</center></h1>
    <form method = 'POST' action = 'latihan6(2).php'>
<body>
    
    <center>
    <input type = 'submit' name = 'submit' value = 'Tambah Siswa'/>
</center>
<br>


</body>
    </html>
<?php 
        if(isset($_POST['submit'])) { 
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $kelas =$_POST['kelas'];
        $alamat = $_POST['alamat'];
        }
    ?>
    

<html>
    
            <table border = "1" cellpadding = "5" align = 'center'>
                
                   <tr> <td><?php echo "Nama <br>";?></td>
                    <td><?php echo "Jenis Kelamin <br>";?></td>
                    <td><?php echo "Kelas <br>";?></td>
                    <td><?php echo "Alamat <br>";?></td></tr>
                    
                    <tr> <td><?php echo "$nama";?></td>
                    <td><?php echo "$jenis";?></td>
                    <td><?php echo "$kelas ";?></td>
                    <td><?php echo "$alamat";?></td></tr>

            </table>

</html>
