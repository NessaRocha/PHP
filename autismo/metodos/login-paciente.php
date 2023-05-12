<?php


require_once('conexao-db.php');
$email = $_POST['email'];
$senha = $_POST['senha'];

$paciente = mysqli_query($conexao, "SELECT * FROM pacientes WHERE email = '$email'");

$paciente = mysqli_fetch_assoc($paciente);

if ($paciente != null) {
    $senha = md5($senha);
    if ($senha == $paciente['senha']) {
        session_start();
        $_SESSION['id'] = $paciente['id'];
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../historico-pareceres.php');
    } else {
        echo "Email ou senha invalidos";
    }
} else {
    echo "Email ou senha invalidos";
}
