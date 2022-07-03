<form name='frmIncPedido' id='frmIncPedido'  method='POST' action="javascript:gravaPedido();" >
	<fieldset><legend>Pedido</legend>
	E-mail para Retorno:<input type='email' name='txtEmail' id='txtEmail' size='10' required><br>
	Pedido<br>
	<textarea name='txtPedido' id='txtPedido' cols='90' rows='15' required></textarea>
	</fieldset>
	<fieldset>
		<input type='submit' name='grv' id='grv' value='Realizar Pedido' onclick="gravaPedido();"><input type='reset' name='lmp' id='lmp' value='Limpar'>
	</fieldset>
</form>