<?php

require_once('model/Paciente.php');

class PacienteController
{

    function __construct()
    {
    }

    function index()
    {
        require_once('views/pacientes/dashboard.php');
    }

    function show()
    {
        $listaPacientes = Paciente::all();
        require_once('views/pacientes/consultar.php');
    }

    function register()
    {
        require_once('views/pacientes/registrar.php');
    }


    function save()
    {
        $a = new Paciente(null, $_POST['nombre'], $_POST['apellido'], $_POST['sintomas'], $_POST['gravedad'], 1);

        $resultado = Paciente::save($a);

        if ($resultado) {
            $this->success();
            $this->show();
        } else {
            $this->_500();
        }
    }

    function updateshow()
    {
        $id = $_GET['id'];
        $paciente = Paciente::obtener($id);
        require_once('views/pacientes/showupdate.php');
    }

    function update()
    {
        $a = new Paciente($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['sintomas'], $_POST['gravedad'], 1);

        $resultado = Paciente::actualizar($a);

        if ($resultado) {
            $this->success();
            $this->show();
        } else {
            $this->_500();
        }
    }

    function delete()
    {
        $id = $_GET['id'];
        $resultado = Paciente::delete($id);

        if ($resultado) {
            $this->success();
            $this->show();
        } else {
            $this->_500();
        }
    }

    function report()
    {
        require_once('views/pacientes/showpdf.php');
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
