<?php


function calculoDeTinta($altura,$largura){

    $metragem=$altura*$largura;

    if($umaDemao==1){
        $consumoTinta=$metragem*8;
    }
    if($duasDemaos==2){
        $consumoTinta=$metragem*16;
    }
    if($tresDemaos==3){
        $consumoTinta=$metragem*24;
    }
    if($quatroDemaos==4){
        $consumoTinta=$metragem*36;
    }
}

echo 'Total de consumo de tinta '.$consumoTinta;