<?php
if(isset($id)){
$sql = "
		select numero,cabecalho,conteudo,id from memorandos
		where id = $id
	";
	if($result=$db->query($sql)){
		$memo=$result->fetch_array()
	?>
		<form name='frmInclusao' id='frmInclusao'  method='POST' action="javascript:alterarMemorando(<?php echo $memo[3] ?>);" >
			<fieldset><legend>Memorando</legend>
			Nº Memorando:<input type='text' name='memoNumero' id='memoNumero' size='10' value='<?php echo $memo[0] ?>'><br>
			cabeçalho<br>
			<textarea name='memoCabecalho' id='memoCabecalho' cols='90' rows='5'><?php echo $memo[1] ?></textarea>
			<br>
			conteúdo<br>
			<textarea name='memoConteudo' id='memoConteudo' cols='90' rows='20'><?php echo $memo[2] ?></textarea>
			</fieldset>
			<fieldset>
				<input type='submit' name='grv' value='Gravar'>
				<input type='reset' name='lmp' value='Limpar'>
			</fieldset>
		</form>
	<?php
	}
}
?>