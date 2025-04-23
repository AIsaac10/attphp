<!-- Escrever um algoritmo que leia o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no
mês (em dinheiro). Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas, informar o
seu nome, o salário fixo e salário no final do mês. -->

<?php 
$vendedor = 'Antônio';
$salFixo = 1500;
$vendEfet = 500;
$comi = $vendEfet * 15 / 100;
$sal = $salFixo + $comi;
echo $vendedor . ' recebeu de salário fixo ' . $salFixo . ' e recebeu no total ' . $sal . ' no mês';
?>