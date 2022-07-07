<?php

if(isset($email) && isset($pedido)){
    $sql = "insert into pedidos(
			email,
			pedido
		)
		values(
			
			'".$db->real_escape_string($email)."',
			'".$db->real_escape_string($pedido)."'
		)		";
    if($db->query($sql)){
        echo "ok";
    }
    else{
        echo "erro ao incluir o pedido";
    }
}
