<?php

require_once('conexao-db.php');

$id = $_GET['parecer-id'];

mysqli_query($conexao, "DELETE FROM pareceres WHERE id=$id");
