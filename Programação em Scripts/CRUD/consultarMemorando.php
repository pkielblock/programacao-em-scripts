<?php
if($numero){	
	$sql = "
		select numero,cabecalho,conteudo,id from memorandos
		where numero like ('%".$db->real_escape_string($numero)."%')
	";
	if($result=$db->query($sql)){
		while($linha=$result->fetch_array()){$res[]=$linha;}
		echo "<table><tr><th>Nº</th><th>Cabeçalho</th><th>Conteúdo</th><th>Alterar</th><th>Excluir</th></tr>";
		foreach($res as $memo){
			echo "<tr>
					<td>{$memo[0]}</td>
					<td>{$memo[1]}</td>
					<td>{$memo[2]}</td>
					<td><a href='javascript:carregarMemorando({$memo[3]})'>Alterar</a></td>
                    <td><a href='javascript:excluirMemorando({$memo[3]})'>Excluir</a></td>
				  </tr>";
		}
		echo "</table>";
	}
	else{
		echo "Erro na consulta";
	}
}
?>