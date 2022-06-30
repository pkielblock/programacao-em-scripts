<?php
header('Content-type: text/html; charset=UTF-8');
$item=$_POST["item"];
switch($item){
	case "1":
		echo "
			<title>Item 1</title>
            <h1>Item 1</h1>
			<p>Texto de conteúdo da primeira página</p>
            ";
	break;
	case "2":
		echo "
			<title>Item 2</title>
            <h1>Item 2</h1>
			<p>Texto de conteúdo da segunda página</p>
            ";
	break;
	case "3":
		echo "
			<title>Item 3</title>
            <h1>Item 3</h1>
			<p>Texto de conteúdo da terceira página</p>
            ";
	break;
	default:
	break;
}
?>
