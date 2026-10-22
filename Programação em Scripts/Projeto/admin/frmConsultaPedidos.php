<form name='frmConsultaPedidos' id='frmConsultaPedidos' method='POST' action="javascript:consultarPedidos();" >
    <fieldset><legend>Consulta Pedidos</legend>
        E-mail: <input type='text' name='email' id='email' size='10'><br>
    </fieldset>
    <fieldset>
        <input type='submit' name='con' value='Consultar'>
        <input type='reset' name='lmp' value='Limpar'>
    </fieldset>
</form>
<div id='resultadoConsulta'></div>