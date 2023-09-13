<?php 
    session_start(); 

    if (isset($_SESSION['name'])) {
        echo '<h2>Bem-vindo! ' . $_SESSION['name'] . '</h2>';
    } else {
        // Redirecione para a página de login se a variável de sessão não estiver definida
        header('Location: index.php');
        exit;
    }
?>