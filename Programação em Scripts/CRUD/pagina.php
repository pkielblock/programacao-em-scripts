<?php
extract($_POST,EXTR_OVERWRITE);
if(!isset($item)){$item='';}
$db = new mysqli('127.0.0.1','pkielblock','teste','store');
if (mysqli_connect_error()) {
	die('Erro de conexão (' . $db->connect_errno . ') '. $db->connect_error);
}
switch($item){
	case 'inclusao':
		include 'frmIncluiMemorando.php';
	break;
	case 'incluirMemorando':
		include 'incluirMemorando.php';
	break;
	case 'consulta':
		include 'frmConsultaMemorando.php';
	break;
	case 'consultarMemorando':
		include 'consultarMemorando.php';
	break;
    case 'excluirMemorando':
		include 'excluirMemorando.php';
	break;
    case 'alterar':
		include 'frmAlterarMemorando.php';
	break;
    case 'alterarMemorando':
		include 'alterarMemorando.php';
	break;
	default:
		include "frmConsultaMemorando.php";
	break;
}
?>
