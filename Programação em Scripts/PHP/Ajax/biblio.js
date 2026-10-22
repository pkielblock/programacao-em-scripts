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

// function mudaTitulo(titulo){
// 	abrePagina('titulo.php?titulo='+titulo,'spanTitulo');
// }

// function abreMenu(titulo){
// 	mudaTitulo(titulo);
// 	abre(titulo,'divConteudo');
// }
