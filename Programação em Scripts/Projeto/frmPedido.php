<form name='frmIncPedido' id='frmIncPedido'  method='POST' action="javascript:gravaPedido();" onSubmit="return validaPedido();" >
    <fieldset><legend>Pedido</legend>
        E-mail para Retorno:<input type='text' name='txtEmail' id='txtEmail' size='10'><br>
        Pedido<br>
        <textarea name='txtPedido' id='txtPedido' cols='90' rows='15' >Gostaria de fazer um pedido dos seguintes itens
-1KG de café em grão torra média
-1 pacote de 10 cápsulas do Café Forte
Atenciosamente,
Nome Cliente
Endereço Cliente</textarea>
        <fieldset>
            <input type='submit' name='grv' id='grv' value='Enviar'><input type='reset' name='lmp' id='lmp' value='Limpar'>
        </fieldset>
    </fieldset>
</form>