<?php
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ../login-paciente.php');
