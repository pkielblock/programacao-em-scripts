function abre(item,alvo){
	var ajax=new XMLHttpRequest();
	var params="item="+item;
	ajax.open("POST","pagina.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange=function()
	{
		if (ajax.readyState==4 && ajax.status==200)
		{
			document.getElementById(alvo).innerHTML=ajax.responseText;
		}
	}
	ajax.send(params);
}

function abrePagina(pagina,alvo){
	var ajax=new XMLHttpRequest();
	
	ajax.open("GET",pagina,true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange=function()
	{
		if (ajax.readyState==4 && ajax.status==200)
		{
			document.getElementById(alvo).innerHTML=ajax.responseText;
		}
	}
	ajax.send();
}
function mudaTitulo(titulo){
	abrePagina('titulo.php?titulo='+titulo,'spanTitulo');
}
function abreMenu(titulo){
    switch(titulo){
		case "Produtos":
			apareceDesaparece('subMenuProdutos');
		break; 
 		default:
			document.getElementById('subMenuProdutos').style.display='none';
		break;

	}
	mudaTitulo(titulo);
	abre(titulo,'divConteudo');
}
function gravaPedido(){
	var ajax=new XMLHttpRequest();
	var objEmail=document.getElementById('txtEmail');
	var objPedido=document.getElementById('txtPedido');
	var params="email="+objEmail.value+"&pedido="+objPedido.value;
	ajax.open("POST","incluiPedido.php",false);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange=function(){
		if (ajax.readyState==4 && ajax.status==200){
			if(ajax.responseText!=''){
				alert(ajax.responseText);
			}
			else{
				alert('Pedido Gravado Com Sucesso');
				document.getElementById('frmIncPedido').reset();
				
			}
		}
	}
	ajax.send(params);
}
function apareceDesaparece(id){
	var obj=document.getElementById(id);
	if(obj.style.display!='flex'){
		obj.style.display='flex';
		return 'flex';
	}
	else{
		obj.style.display='none';
		return 'none';
	}
}
function abreSubMenu(id){
    if(apareceDesaparece(id)=='flex'){
       abre(id,id);
    }
}

function gravaPedido(){
	var ajax=new XMLHttpRequest();
	var objEmail=document.getElementById('txtEmail');
	var objPedido=document.getElementById('txtPedido');
	var params="email="+objEmail.value+"&pedido="+objPedido.value;
	ajax.open("POST","incluiPedido.php",false);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange=function(){
		if (ajax.readyState==4 && ajax.status==200){
			if(ajax.responseText!=''){
				alert(ajax.responseText);
			}
			else{
				alert('Pedido Gravado Com Sucesso');
				document.getElementById('frmIncPedido').reset();
				
			}
		}
	}
	ajax.send(params);
}
