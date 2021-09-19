<?php

require_once('model/Alumno.php');

class AlumnoController
{

    function __construct()
    {
    }

    function index()
    {
        require_once('index.php');
    }

    function show()
    {
        $listaAlumnos = Alumno::all();
        require_once('views/alumnos/consultar.php');
    }

    function register()
    {
        require_once('views/alumnos/registrar.php');
    }


    function save()
    {

        $a = new Alumno(
            NULL,
            $_POST['tipo'],
            $_POST['carrera'] . $_POST['anio'] . $_POST['correlativo'],
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['dpi'],
            $_POST['nit'],
            $_POST['email1'],
            $_POST['email2'],
            $_POST['tel1'],
            $_POST['tel2']
        );

        $resultado = Alumno::save($a);

        if ($resultado) {
            $this->success();
            $this->show();
        } else {
            $this->_500();
        }
    }

    function _404()
    {
        require_once('views/404.php');
    }

    function _500()
    {
        require_once('views/500.php');
    }

    function success()
    {
        require_once('views/success.php');
    }
}
