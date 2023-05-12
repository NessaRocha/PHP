<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'integra_autista';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //if($conexao->connect_errno)
   // {
      // echo "Erro de conexao";
    //}
    //else
  //{
       //echo "Conexão efetuada com sucesso";
    //}

?>