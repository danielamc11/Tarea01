<?php /* Ejercicio6 */
$altura=$_POST['altura'];
$peso=$_POST['peso'];

$IMC= $peso/pow($altura, 2); //IMC= peso/ altura al cuadrado
echo "Su IMC es $IMC<br>";
if($IMC<18.5){
	echo "Bajo peso";
}
if ($IMC>=19 && $IMC<25) {
	echo "Normal";
}
else {
	echo "Sobre peso";
}
?>