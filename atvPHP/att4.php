<?php 
$vendedor = 'Antônio';
$salFixo = 1500;
$vendEfet = 500;
$comi = $vendEfet * 15 / 100;
$sal = $salFixo + $comi;
echo $vendedor . ' recebeu de salário fixo ' . $salFixo . ' e recebeu no total ' . $sal . ' no mês';
?>