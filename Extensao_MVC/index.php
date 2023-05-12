<?php
require __DIR__ .'/vendor/autoload.php';


//use \App\Controller\Pages\Home;
use \App\Http\Router;
use \App\Utils\View;
use \Variables\DotEnv\Environment;
use \App\Entity\Cadastro;

$cadastro = Cadastro::getCadastro();

//Carrega variáveis de ambiente
Environment::load(__DIR__);

define('URL', 'projeto.mob');

View::init([
    'URL' => URL
]);



$obRouter = new Router(URL);

include __DIR__ .'/routes/pages.php';



$obRouter->run()->sendResponse();