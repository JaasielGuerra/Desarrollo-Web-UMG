<?php

//incluir el archivo de conexion antes que nada
require_once('model/connection.php');


if (isset($_GET['action'])) {

	$action = $_GET['action'];

} else {
	$action = 'show';
}
require_once('views/template/template.php');
