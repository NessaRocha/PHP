<?php


    function calcularIMC($peso,$altura){

    $imc = $peso  / $altura ** 2;

        if ($imc <= 18.5) {
            return 'MAGREZA';
        } else if ($imc > 18.5 && $imc <= 24.9) {
            return 'NORMAL';
        } else if ($imc > 25.0 && $imc <= 29.9) {
            return 'SOBREPESO';
        } else if ($imc > 30.0 && $imc <= 39.9) {
            return 'OBESIDADE';
        }
    }