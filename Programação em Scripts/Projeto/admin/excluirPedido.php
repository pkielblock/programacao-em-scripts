<?php
if(isset($id)){
    $sql = "delete from pedidos where id=$id";

    if($db->query($sql)){
        echo "ok";
    }
    else{
        echo "Erro na exclusão";
    }
}
?>
