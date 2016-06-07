

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Factorial Cantidad de Cero</title>
</head>
<body>
	<html><head><title>Prueba de Programacion</title></head>
<body>
<center>
	<form method="POST" action="formulario.php">
Ingresar un numero mayor a 0
<br>
<input type="text" name="num" size=30>
 
<input type="submit" name="ber" value="calcular">
</form>
<?php
$factorial= $_POST['num'];
echo "<hr>"."!";
$svar=1;
for($matte=2;$matte<=$factorial;$matte++){
$svar=$svar * $matte;
 
}
echo " = ".$svar;
$numero = getcantcero($svar); 
	echo" <br>";
	 echo "Cantidad de Cero(0)=<b>$numero</b>";
	
	function getcantcero($var){
		 $value=substr_count($var, 0);
	return $value;			 
		}
?>
	<center>
</body>
</html>
 </body>
</html>