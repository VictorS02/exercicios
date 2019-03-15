<?php

    print "Digite a distância a percorrer em (km): ";
    $km = (float) fgets (STDIN);

    print "Digite qual fui a velocidade média: ";
    $vm = (float) fgets (STDIN);

    $tempo = $km/$vm;

    print "o tempo de viagem é de $tempo horas";