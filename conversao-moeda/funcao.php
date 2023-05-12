<?php


function valorEmDolar($valor){
    
    

}
function valorEmReais($valor){
    return 'R$ '.number_format($valor,2, ',', '.');
    

}

function valorEmPeso($valor){
    return '$ '.number_format($valor,2, ',', '.');
    

}

function numeroParaDinheiro($valor,$moeda){
    if($moeda=='usd') return 'US '.number_format($valor,2, '.', ',');
    if($moeda=='brl') return 'R$ '.number_format($valor,2, ',', '.');
    if($moeda=='ars') return '$ '.number_format($valor,2, ',', '.');
    if($moeda=='eur') return number_format($valor,2, ',', '.').' €';

}