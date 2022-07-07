function abre(item, alvo){
	const ajax = new XMLHttpRequest();
	let params = "item=" + item;
	ajax.open("POST","pagina.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange = function()
	{
		if (ajax.readyState === 4 && ajax.status === 200)
		{
			document.getElementById(alvo).innerHTML=ajax.responseText;
		}
	}
	ajax.send(params);
}

function abrePagina(pagina, alvo){
	const ajax = new XMLHttpRequest();
	
	ajax.open("GET", pagina,true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange = function()
	{
		if (ajax.readyState === 4 && ajax.status === 200)
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
	var params="item=incluiPedido&email="+objEmail.value+"&pedido="+objPedido.value;
	ajax.open("POST","pagina.php",true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange=function(){
		if (ajax.readyState===4 && ajax.status===200){
			if(ajax.responseText!=='ok'){
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

function validaPedido(){
	var objEmail=document.getElementById('txtEmail');
	var objPedido=document.getElementById('txtPedido');
	var msg ='';

	if(objEmail.value==='' || objEmail.value.search('@')===-1){
		msg+="E-mail inválido!\n";
	}
	if(objPedido.value===''){
		msg+="Por favor preecha seu pedido\n";
	}
	if(msg!==''){
		alert(msg);
		return false;
	}
	else{
		return true;
	}
}

function apareceDesaparece(id){
	let obj = document.getElementById(id);
	if(obj.style.display !== 'flex'){
		obj.style.display='flex';
		return 'flex';
	}
	else{
		obj.style.display='none';
		return 'none';
	}
}

function abreSubMenu(id){
    if(apareceDesaparece(id) === 'flex'){
       abre(id, id);
    }
}