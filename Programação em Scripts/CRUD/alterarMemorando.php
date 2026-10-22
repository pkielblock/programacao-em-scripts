<?php
if(isset($id) && isset($numero) && isset($cabecalho) && isset($conteudo)){
	
	$sql = "update memorandos
		set 
			numero='".$db->real_escape_string($numero)."',
			cabecalho='".$db->real_escape_string($cabecalho)."',
			conteudo='".$db->real_escape_string($conteudo)."'
		where
			id='".$db->real_escape_string($id)."'
		";
	if($db->query($sql)){
		echo "ok";
	}
	else{
		echo "erro ao alterar o memorando";
	}
}

?>