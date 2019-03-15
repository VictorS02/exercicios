<?php

    print "Temperatura em graus Celsius: ";
    $celsius = (float) fgets (STDIN);

    $fahrenheit = (float)(9*$celsius)/(5)+32;

    print "A temperatura em fahrenheit é de: $fahrenheit";