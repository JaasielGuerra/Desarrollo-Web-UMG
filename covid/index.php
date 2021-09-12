<?php

//incluir el archivo de conexion antes que nada
require_once('model/connection.php');


if (isset($_GET['action']) && isset($_GET['title'])) {

	$action = $_GET['action'];
	$title = $_GET['title'];

} else {
	$action = 'index';
	$title = 'Dashboard';
}

require_once('views/template/template.php');
