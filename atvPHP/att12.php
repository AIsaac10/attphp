<!-- O custo ao consumidor de um carro novo é a soma do custo de fábrica com a percentagem do distribuidor e dos
impostos (aplicados, primeiro os impostos sobre o custo de fábrica, e depois a percentagem do distribuidor sobre o
resultado). Supondo que a percentagem do distribuidor seja de 28% e os impostos 45%. Escrever um algoritmo que
leia o custo de fábrica de um carro e informe o custo ao consumidor do mesmo. -->

<?php 
$custoFabr = 30000;
$imposto = ($custoFabr * 45) / 100;
$valImposto = $custoFabr + $imposto;
$dist = ($valImposto * 28) / 100;
$valDistr = $valImposto + $dist;
echo "o preço de fabrica é $custoFabr e o valos do consumidor é $valDistr";

?>
