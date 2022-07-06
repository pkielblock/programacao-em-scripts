<form name='frmConsulta' method='POST' action="javascript:consultarMemorando();" >
	<fieldset><legend>Consulta Memorando</legend>
		Nº Memorando:<input type='text' name='memoNumero' id='memoNumero' size='10'><br>
	</fieldset>
	<fieldset>
		<input type='submit' name='con' value='Consultar'>
		<input type='reset' name='lmp' value='Limpar'>
	</fieldset>
</form>
<div id='resultadoConsulta'></div>