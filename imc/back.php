<?php


require_once('funcoes.php');

$alturaRecebida=$_GET['altura'];
$pesoRecebido=$_GET['peso'];

if(is_numeric($alturaRecebida)&&is_numeric($pesoRecebido)){

    echo calcularIMC($pesoRecebido,$alturaRecebida);

}else{
   echo 'Vai achar o que fazer';
}


?>