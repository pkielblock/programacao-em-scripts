<form name='frmInclusao' id='frmInclusao'  method='POST' action="javascript:incluirMemorando();" >
	<fieldset><legend>Memorando</legend>
	Nº Memorando:<input type='text' name='memoNumero' id='memoNumero' size='10' value='numero/ano'><br>
	cabeçalho<br>
	<textarea name='memoCabecalho' id='memoCabecalho' cols='90' rows='5'> ao Sr(a) ,
Assunto:
	</textarea>
	<br>
	conteúdo<br>
	<textarea name='memoConteudo' id='memoConteudo' cols='90' rows='20'>
Conteúdo do memorando
Atenciosamente,
Nome do remetente.	
	</textarea>
	</fieldset>
	<fieldset>
		<input type='submit' name='grv' value='Gravar'>
		<input type='reset' name='lmp' value='Limpar'>
	</fieldset>
</form>