<?php
class Alumno 
{
    private $id;
    private $nombre;
    private $apellidos;
    private $estado;

    public function __construct( $id, $nombre,$apellidos, $estado){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->estado = $estado;
    }

    public function save($alumno)
    {
        # code...
    }
    
    public function update($alumno)
    {
        # code...
    }

    public function delte($alumno)
    {
        # code...
    }

    public function read()
    {
        # code...
    }
}
