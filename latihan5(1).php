<html>
<head>
    <title>Nilai Rata - Rata</title>
</head>
<body>
<h1>Input Bilangan</h1>
<form method="post" action=" ">
Masukkan Banyaknya Bilangan <input type="text" name="n" />
<input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>

<?php
echo "<br>";
if (isset($_POST['submit'])) { 
$n = $_POST['n'];
echo "<form method='post' action='latihan5(2).php'>";
echo "<h3> Input Bilangan </h3> <br>";
for ($i = 0; $i <= $n-1; $i++)
{
 echo "Bil ke-".($i+1)." <input type='text' name='data".$i."' /><br>";
}
 echo "<input type='submit' name='submit' value='Submit' />";
 echo "<input type='hidden' name='n' value='".$n."' />";
echo "</form>";
}
?>