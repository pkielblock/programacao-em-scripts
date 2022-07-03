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
	let objEmail = document.getElementById('txtEmail');
	let objPedido = document.getElementById('txtPedido');
	if (objEmail.value === ''){
		alert('Preencha o campo Email');
		objEmail.focus();
	} else if (objPedido.value === ''){
		alert('Preencha o campo Pedido');
		objPedido.focus();
	} else {
		alert('Pedido Gravado Com Sucesso');
		objEmail.value = '';
		objPedido.value = '';
		objEmail.focus();
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