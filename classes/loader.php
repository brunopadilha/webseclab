<?php
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL);
	require_once('constantes.php');
	require_once("db.class.php");
	require_once("auth.class.php");
	require_once("menu.class.php");
	require_once("noticia.class.php");
	require_once("comentario.class.php");
?>