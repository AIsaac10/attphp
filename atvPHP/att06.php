<!-- Ler dois valores para as variáveis A e B, e efetuar as trocas dos valores de forma que a variável A passe a possuir
o valor da variável B e a variável B passe a possuir o valor da variável A. Apresentar os valores trocados. -->

<?php 
$A = 'valor de A';
$B = 'valor de B';
$C = $A;
$A = $B;
$B = $C;
echo $A;
echo '<br>';
echo $B;
?>