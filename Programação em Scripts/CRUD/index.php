<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css.css">
		<script language='javascript' src='biblio.js'></script>
	</head>
	<body>
		<div id="divTitulo">Memorandos<span id='spanTitulo'></span></div>
			<div id="divMenu">
				<ul>
					<li><a href="javascript:abreMenu('inclusao');">Inclusão</a></li>
					<li><a href="javascript:abreMenu('consulta');">Consulta</a>						
				</ul>
			</div>
			<div id="divConteudo"></div>
		</div>
		<script language='javascript'>
			abre('consulta','divConteudo');
		</script>
	</body>
</html>