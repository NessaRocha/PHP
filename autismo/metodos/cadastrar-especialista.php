<?php


session_start();

require_once('conexao-db.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$especialidade = $_POST['especialidade'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmar-senha'];

$emails = mysqli_query($conexao, "SELECT * FROM `especialistas` WHERE email = '$email'");
$emailsContador = mysqli_num_rows($emails);


if ($emailsContador == 0) {

    if ($senha == $confirmaSenha) {
        $senha = md5($senha);
        $nomeCompleto = $nome . ' ' . $sobrenome;
        $result = mysqli_query($conexao, "INSERT INTO especialistas(nome,email,especialidade,senha)
            VALUES ('$nomeCompleto','$email','$especialidade','$senha')");

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../adicionar-parecer.php');
    } else {

        $_SESSION['cadastro_erro'] = "As senhas não conferem";
        $_SESSION['dados'] = $_POST;
        header('Location: ../cadastro-especialista.php');
    }
} else {
    $_SESSION['dados'] = $_POST;
    $_SESSION['cadastro_erro'] = "Esse e-mail já foi cadastrado";
    header('Location: ../cadastro-especialista.php');
}
