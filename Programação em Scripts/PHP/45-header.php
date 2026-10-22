<?php
    session_start();
    echo "Bem Vindo " . $_SESSION['login'] . "<br>";
    echo "<a href='45-logout.php'>Sair</a>";
?>