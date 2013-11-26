<?php
date_default_timezone_set('UTC-3');
$link =  mysql_connect('localhost', 'root', '');
if (!$link) {
	mysql_close($link);
	die ('No pudo conectarse utilizando la funcion conexion: ' . mysql_error());
}
$db_selected = mysql_select_db('market-ink', $link);
if (!$db_selected) {
	mysql_close($link);
	die ('No pudo seleccionarse la base de datos Market-ink utilizando la funcion conexion: ' . mysql_error());
}
mysql_set_charset('utf8',$link);
mysql_query("SET NAMES 'utf8'");
?>
