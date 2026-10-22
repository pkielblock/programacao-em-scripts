<?php
if($_GET['titulo']!=''){
	$titulo=': '.$_GET['titulo'];
}
else{
	$titulo='';
}
echo "$titulo";
?>
