<?php
if(isset($usuario) && isset($senha)){
    if($usuario=='teste' && $senha=='1234'){
        $_SESSION['usuario']=$usuario;
        echo 'ok';
    }
    else{
        echo 'Usuário ou senha incorretos';
    }
}
?>