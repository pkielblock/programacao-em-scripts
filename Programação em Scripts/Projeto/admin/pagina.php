<?php
session_start();
extract($_POST,EXTR_OVERWRITE);
if(!isset($item)){$item='';}
if(!isset($_SESSION['usuario']) && $item!='autenticar'){
    echo "<script>document.location.href='';</script>";
}else{
    $db = new mysqli('127.0.0.1','pkielblock','teste','store');
    if (mysqli_connect_error()) {
        die('Erro de conexão (' . $db->connect_errno . ') '. $db->connect_error);
    }
    switch($item){
        case 'autenticar':
            include "autenticar.php";
            break;
        case 'sair':
            include "sair.php";
            break;
        case 'frmConsultaPedidos':
            include "frmConsultaPedidos.php";
            break;
        case 'consultarPedidos':
            include "consultarPedidos.php";
            break;
        case 'excluirPedido':
            include "excluirPedido.php";
            break;
        case 'carregarPedido':
            include "carregarPedido.php";
            break;
        case 'alterarPedido':
            include "alterarPedido.php";
            break;
        default:
            break;
    }
}
?>