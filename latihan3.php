<html>
<head>
<title>Segitiga Bintang Ganjil Genap </title>
</head>
<body>
	<form action = "" method="post">
		<table>
			<tr>
				<td>
					<label for="input">Masukkan Bintang</label>
				</td>
				<td>
					<input type="text" name="input">
				</td>
				<td>
				<button type="Submit">submit</button>
			</td>
			</tr>
			</table>
		</form>
	</body>
	</html>

	<?php
    if(isset($_POST['input'])){
	$input = $_POST['input'];
    echo "Program segitiga bintang siku-siku <br> ";
    $star = "$input" ;
	for($r = $star; $r > 0; $r--){
		for($l = $star; $l >= $r; $l--){
			echo "*";
		}
		echo "<br>";
	}
    echo "<br>";
    echo "Program Ganjil Genap dengan menggunakan For <br>";
    echo bilangan($input);
}
function bilangan($input){
$genap = 0;
for($i=1; $i <= $input; $i++){
	if($i%2==0){
		echo $i." <br>  ";
		$genap++;
	}
}
}
?>