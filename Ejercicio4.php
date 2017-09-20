<?php /* Ejercicio4*/
if (isset($_POST['d'])) {
	$d=$_POST['d'];
	$π=3.14;
}
$area= ($π/4)*$d*2;
$circu=$π*$d;
echo "Area:$area Circuferecia:$circu ";
?>
