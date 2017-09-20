<?php /*Ejercicio1 */
if (isset($_POST['imv'])) {
	$subtotal=$_POST['subtotal'];
	$imv=$_POST['imv'];
	$pago=$_POST['pago'];
}
$total=$subtotal+$imv;
$vuelto=$total-$pago;
if($total>$pago){
	echo "Se debe dinero";
}
else{
echo "El vuelto es de: $vuelto";
}

?>