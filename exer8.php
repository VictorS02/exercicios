<?php 

    print "\nHá quantos anos você fuma? R: ";
    $anos_fumados = (int)fgets(STDIN);
    print "\nE quantos cigarros você fuma por dia? R: ";
    $cigarros_por_dias = (int)fgets(STDIN);

    $cigarros_fumados = $cigarros_por_dias*365*$anos_fumados;
    $minutos_perdidos = $cigarros_fumados*11;
    $horas_perdidas = $minutos_perdidos/60;
    $dias_perdidos = round($horas_perdidas/24);

    print "\nVocê perdeu $dias_perdidos de vida fumando\n";