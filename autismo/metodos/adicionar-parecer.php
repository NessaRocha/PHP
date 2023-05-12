<?php

require_once('conexao-db.php');
session_start();

$especialistaId = $_SESSION['id'];
$pacienteId = $_POST['paciente-id'];
$parecer = $_POST['parecer'];

try {
    $queryResult = mysqli_query($conexao, "INSERT INTO pareceres (especialista_id,paciente_id,data,parecer) VALUES ('$especialistaId','$pacienteId',NOW(),'$parecer')");
    if ($queryResult) {
        $_SESSION['adicionar_parecer_com_sucesso'] = 'Parecer enviado com SUCESSO!';
        header('Location: ../adicionar-parecer.php');
    } else {
        $_SESSION['adicionar_parecer_com_erro'] = 'Erro ao enviar o parecer';
        header('Location: ../adicionar-parecer.php');
    }
} catch (Exception $exception) {
    $_SESSION['adicionar_parecer_com_erro'] = 'Erro ao enviar o parecer';
    header('Location: ../adicionar-parecer.php');
}
