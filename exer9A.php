<?php

print "\nQual area você deseja pintar: ";
$area = (int)fgets(STDIN);

    #lata
    $lata_rendimendo = 108; #18*6
    $lata_preco = 80;

    #a  compra apenas de latas de 18 litros

    $qtd_latas = ceil($area / $lata_rendimendo);
    $latas_custo = $qtd_latas * $lata_preco;
     print "\nSerão necessárias $qtd_latas lata(s) no valor de R$$latas_custo\n";