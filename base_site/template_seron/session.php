<?php
session_start();

// Verifica se a sessão está iniciada
if (isset($_SESSION['loggedin'])){
    $status = "Logado";
    $colaborador = $_SESSION['colaborador'];
    $session_id = $_SESSION['id'];
} else {
    $status = "Cadastre-se";
    header('Location: login.php');   
}
?>