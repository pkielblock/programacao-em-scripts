<?php
    extract($_POST,EXTR_OVERWRITE);
    if(!isset($item)){$item='';}
    switch($item){
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
        case 'Fornecedores':
            include "fornecedores.php";
        break;
        default:
            include "sobre.php";
        break;
    }
?>