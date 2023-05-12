<?php

use \App\Http\Response;
use \App\Controller\Pages;



//Rota Cadastro
$obRouter->get('/cadastro', [
    function () {
        return new Response(200, Pages\cadastro::getCadastro());
    }
]);



$obRouter->get('/formulario', [
    function () {
        return new Response(200, Pages\Formulario::getFormulario());
    }
]);

$obRouter->get('/respostas', [
    function () {
        return new Response(200, Pages\Respostas::getRespostas());
    }
]);


//Rota dinamica
$obRouter->get('/page/{idPage}/{action}', [
    function ($idPage, $action) {
        return new Response(200, 'Page' . $idPage . '.' . $action);
    }
]);
