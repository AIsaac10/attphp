<!-- Faça um algoritmo que receba um valor que foi depositado e exiba o valor com rendimento após um mês.
Considere fixo o juro da poupança em 0,70% a. m. -->

<?php 
$valDep = 150;
$valPol = ($valDep * 0.7) / 100;
$valTotal = $valDep + $valPol;
echo $valTotal; 
?>