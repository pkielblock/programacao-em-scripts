<?php
if($email){
    $sql = "
		select email,pedido,id from pedidos
		where email like ('%".$db->real_escape_string($email)."%')
	";
    if($result=$db->query($sql)){
        while($linha=$result->fetch_array()){$res[]=$linha;}
        //echo "<table><tr><th>ID</th><th>E-mail</th></tr>";
        foreach($res as $memo){
            echo "    <tr><table><tr><th>ID</th><th>E-mail</th></tr>
                      <tr>
                        <td>{$memo[2]}</td>
                        <td>{$memo[0]}</td>
                      </tr>
                      <th colspan='2'>Pedido</th>
                      <tr>
                        <td colspan='2'><pre>{$memo[1]}</pre></td>
                      </tr>
                      <tr>
                        <td colspan='2'><a href='javascript:excluirPedido({$memo[2]})'>Excluir</a> - <a href='javascript:carregarPedido({$memo[2]})'>Alterar</a></td>
                      </tr>
                      ";
        }
        echo "</table>";
    }
    else{
        echo "Erro na consulta";
    }
}
?>
