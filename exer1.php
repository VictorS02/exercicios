<?php
    
    print  "Digite um valor em metros para ser convertido:   ";
    $metros  = ( float ) fgets ( STDIN );

    $milimetro =  $metros * 1000 ;

    print  " Valor em milimetros: $milimetro  " ;