<!-- Escrever um algoritmo que leia dois valores inteiro distintos e informe qual é o maior. -->

<?php 
$num1 = 3;
$num2 = 7;
if ($num1 > $num2) {
    echo $num1 . ' é maior do que ' . $num2;
}
elseif ($num1 < $num2) {
    echo $num2 . ' é maior do que ' . $num1;
}

else {
    echo $num1 . ' são valores iguais ' . $num2;
}

?>