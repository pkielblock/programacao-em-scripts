<?php
    extract($_POST,EXTR_OVERWRITE);
    if(!isset($item)){$item='';}
    switch($item){
        case 'Sobre':
            include "sobre.php";
        break;
        case 'Produtos':
            include "produtos.php";
        break;
        case 'Ofertas':
            include "ofertas.php";
        break;
        case 'Contato':
            include "contato.php";
        break;
        case 'divSubMenuProdutos':
            include "subProdutos.php";
        break;
        case 'divSubMenuPedidos':
            include "frmPedido.php";
        break;
        default:
            include "sobre.php";
        break;
    }
?>