<?php

require_once('conexao-db.php');
$emailDigitado = $_POST['email'];
$senhaDigitada = $_POST['senha'];

$queryResult = mysqli_query($conexao, "SELECT * FROM especialistas WHERE email='$emailDigitado'");
$especialista = mysqli_fetch_assoc($queryResult);

$senhaDigitada = md5($senhaDigitada);

if ($especialista == null) {
    echo 'Email ou usuario não cadastrado';
} else {
    if ($especialista['senha'] != $senhaDigitada) {
        echo 'Email ou usuario não cadastrado';
    } else {
        session_start();
        $_SESSION['id'] = $especialista['id'];
        $_SESSION['email'] = $emailDigitado;
        $_SESSION['senha'] = $senhaDigitada;
        header('Location: ../adicionar-parecer.php');
    }
}
