<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css.css">
		<script language='javascript' src='biblio.js'></script>
	</head>
	<body>
		<div id="divTitulo"><img src='https://yt3.ggpht.com/ytc/AKedOLTy2r1dUJu-IQtS9pvu-B3oKPdx6sEWQKpf-yUf=s900-c-k-c0x00ffffff-no-rj'> Café espetacular<span id='spanTitulo'></span></div>
		<div id="divMenu">
		<ul>
			<li><a href="javascript:abreMenu('Sobre');">Sobre</a></li>
			<li><a href="javascript:abreMenu('Produtos');">Produtos</a>
				<ul id='subMenuProdutos'>
					<li><a href="javascript:abreSubMenu('divSubMenuProdutos');">Produtos</a></li>
					<li><a href="javascript:abreSubMenu('divSubMenuPedidos');">Pedidos</a></li>
				</ul>
			</li>
			<li><a href="javascript:abreMenu('Ofertas');">Ofertas</a></li>
			<li><a href="javascript:abreMenu('Contato');">Contato</a></li>
		</ul>
		</div>
		<div id="divConteudo"></div>
		<div id="divRodape"><span id='telefone'>5555-5555</span><span id='email'> contato@cafeespetacular.com.br</span></div>		
        <script language='javascript'>
			abre('Sobre','divConteudo');
		</script>
	</body>
</html>
