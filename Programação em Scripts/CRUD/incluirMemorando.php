<?php
if(isset($numero) && isset($cabecalho) && isset($conteudo)){	
	$sql = "insert into memorandos(
			numero,
			cabecalho,
			conteudo
		)
		values(
			'".$db->real_escape_string($numero)."',
			'".$db->real_escape_string($cabecalho)."',
			'".$db->real_escape_string($conteudo)."'
		)		"; 
	if($db->query($sql)){
		echo "ok";
	}
	else{
		echo "erro ao incluir o memorando";
	}
}
?>