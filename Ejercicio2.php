<?php /*Ejercicio2*/
$fibonacci = array();
$fibonacci[0] = 0;
$fibonacci[1] = 1;
 
for ($i = 2; $i < 50; $i++) {
  $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}
 
echo array_sum($fibonacci);
?>