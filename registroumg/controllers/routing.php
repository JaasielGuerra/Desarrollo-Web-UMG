<?php

$actions = ['index', 'register', 'save', 'show', 'updateshow', 'update', 'delete', 'search', 'report'];

//validar que existe la accion en el array
if (in_array($action, $actions)) {
    call($action);
} else {
    call('_404');
}

function call($action)
{

    //incluir controlador`
    require_once('controllers/AlumnoController.php');

    //instanciar clase controlador
    $controller = new AlumnoController();

    //segun accion llamar metodo
    $controller->{$action}();


}
