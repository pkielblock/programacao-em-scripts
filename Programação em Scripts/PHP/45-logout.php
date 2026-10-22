<?php
    session_start();

    if(!isset($_SESSION['login'])) {
        echo 'Nao esta logado';
        header('Refresh: 2; URL = 45-exercicio37.php');
    } else {
        unset($_SESSION["login"]);
        unset($_SESSION["senha"]);

        echo 'Voce saiu';
        header('Refresh: 2; URL = 45-exercicio37.php');
    }

    
?>