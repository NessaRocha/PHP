<?php
session_start();


require_once('conexao-db.php');


$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmar-senha'];

$emails = mysqli_query($conexao, "SELECT * FROM `pacientes` WHERE email = '$email'");
$emailsContador = mysqli_num_rows($emails);

if ($emailsContador == 0) {

    if ($senha == $confirmaSenha) {
        $senha = md5($senha);
        $nomeCompleto = $nome . ' ' . $sobrenome;
        $result = mysqli_query($conexao, "INSERT INTO pacientes(nome,email,senha)
        VALUES ('$nomeCompleto','$email','$senha')");

        header('Location: ../login-paciente.php');
    } else {
        echo "As senhas são difetentes";
    }
} else {
    echo "Email já cadastrado";
}
