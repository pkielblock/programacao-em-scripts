<form name='frmIncPedido' id='frmIncPedido'  method='POST' action="javascript:gravaPedido();" >
	<fieldset><legend>Pedido</legend>
	E-mail para Retorno:<input type='text' name='txtEmail' id='txtEmail' size='10'><br>
	Pedido<br>
	<textarea name='txtPedido' id='txtPedido' cols='90' rows='15'></textarea>
	</fieldset>
	<fieldset>
		<input type='submit' name='grv' id='grv' value='enviar'><input type='reset' name='lmp' id='lmp' value='limpar'>
	</fieldset>
</form>