<!-- Rotas / Chamadas de métodos / Instanciando controller-->
<?php
require_once('./controllers/ClientsController.php');
require_once('./controllers/CommentsController.php');

$page =  $_SERVER['PATH_INFO'] ?? '/';

if ($page == '/') $method = ['controller' => new ClientsController(), 'name' => 'list'];
if ($page == '/show-form') $method = ['controller' => new ClientsController(), 'name' => 'showForm'];
if ($page == '/store-received-data') $method = ['controller' => new ClientsController(), 'name' => 'storeReceivedData'];
if ($page == '/delete-form') $method = ['controller' => new ClientsController(), 'name' => 'deleteForm'];
if ($page == '/submit-completed-form') $method = ['controller' => new ClientsController(), 'name' => 'submitCompletedForm'];
if ($page == '/edit-data') $method = ['controller' => new ClientsController(), 'name' => 'editData'];

if ($page == '/comments') $method = ['controller' => new CommentsController(), 'name' => 'comments']; //exibe tela

if ($page == '/store-received-comment') $method = ['controller' => new CommentsController(), 'name' => 'storeReceivedComment']; //armazena tela

if ($page == '/edit-comment') $method = ['controller' => new CommentsController(), 'name' => 'editComment'];





if (!isset($method)) echo "Pagina nao encontrada";
else {

    if (empty($_POST)) $method['controller']->{$method['name']}($_GET);
    else $method['controller']->{$method['name']}($_POST);
}




?>