<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div>
        <form action="45-exercicio37.php" method="POST">
            Login: 
            <input type="text" name="login" id="login">
            <br>
            Senha:
            <input type="password" name="senha" id="senha">
            <input type="submit" value="Logar">
        </form>
    </div>
</body>
</html>
<?php
if (isset($_POST['login']) && !empty($_POST['login']) && !empty($_POST['senha'])) {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['senha'] = $_POST['senha'];
    echo "<a href='45-header.php'>Continuar</a>";
}
?>
