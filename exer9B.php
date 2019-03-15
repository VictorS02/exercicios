<?php

print "\nQual area você deseja pintar: ";
$area = (int)fgets(STDIN);

    #galao
    $galao_rendimento = 21.6; #3.6*6
    $galao_preco = 25;

    #a  compra apenas de galaoes de 3,6 litors

    $qtd_galao = ceil($area / $galao_rendimento);
    $galao_custo = $qtd_galao * $galao_preco;
     print "\nSerão necessárias $qtd_galao lata(s) no valor de R$$galao_custo\n";