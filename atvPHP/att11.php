<!-- Faça um algoritmo que receba o preço de custo de um produto e mostre o valor de venda. Sabe-se que o preço de
custo receberá um acréscimo de acordo com um percentual informado pelo usuário. -->

<?php 
$custo = 35;
$percentual = ($custo * 20) / 100;
$total = $custo + $percentual;
echo $total;
?>