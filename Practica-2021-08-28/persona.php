<?php

class persona{

    private $dpi;
    private $nombre;
    private $direccion;
    private $edad;


    public function __construct($dpi, $nombre, $direccion, $edad) {

        $this->dpi = $dpi;
        $this->nombre = $nombre;
        $this-direccion = $direccion;
        $this-edad = $edad;

    }
    

//sobre carga de metodos
    public function getDpi()
    {
        return $this->dpi;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setDpi()
    {
         $this->dpi = $dpi;
    }

    public function setNombre()
    {
         $this->nombre = $nombre;
    }

    public function setDireccion()
    {
         $this->direccion = $direccion;
    }

    public function setEdad()
    {
         $this->edad = $edad;
    }

    $empleado = new persona("198839","Jonatan","Esquipulas","23");

    echo("El DPI ES: " . $empleado->getDpi());
    echo('<br />');
    echo("EL NOMBRE ES: " .$empleado->getNombre());







    

}





?>