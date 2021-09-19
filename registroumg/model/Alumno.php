<?php

class Alumno
{
    private $id;
    private $tipo;
    private $carnet;
    private $nombre;
    private $apellidos;
    private $dpi;
    private $nit;
    private $correo1;
    private $correo2;
    private $tel1;
    private $tel2;

    function __construct($id, $tipo, $carnet, $nombre, $apellidos, $dpi, $nit, $correo1, $correo2, $tel1, $tel2)
    {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->carnet = $carnet;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->dpi = $dpi;
        $this->nit = $nit;
        $this->correo1 = $correo1;
        $this->correo2 = $correo2;
        $this->tel1 = $tel1;
        $this->tel2 = $tel2;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of carnet
     */
    public function getCarnet()
    {
        return $this->carnet;
    }

    /**
     * Set the value of carnet
     *
     * @return  self
     */
    public function setCarnet($carnet)
    {
        $this->carnet = $carnet;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of dpi
     */
    public function getDpi()
    {
        return $this->dpi;
    }

    /**
     * Set the value of dpi
     *
     * @return  self
     */
    public function setDpi($dpi)
    {
        $this->dpi = $dpi;

        return $this;
    }

    /**
     * Get the value of nit
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set the value of nit
     *
     * @return  self
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get the value of correo1
     */
    public function getCorreo1()
    {
        return $this->correo1;
    }

    /**
     * Set the value of correo1
     *
     * @return  self
     */
    public function setCorreo1($correo1)
    {
        $this->correo1 = $correo1;

        return $this;
    }

    /**
     * Get the value of correo2
     */
    public function getCorreo2()
    {
        return $this->correo2;
    }

    /**
     * Set the value of correo2
     *
     * @return  self
     */
    public function setCorreo2($correo2)
    {
        $this->correo2 = $correo2;

        return $this;
    }

    /**
     * Get the value of tel1
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set the value of tel1
     *
     * @return  self
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get the value of tel2
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set the value of tel2
     *
     * @return  self
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    public static function save(Alumno $a)
    {
        $conexion = Db::getConnect();

        try {

            $insert = $conexion->prepare('INSERT INTO `alumno`(`id`, `tipo`, `carnet`, `nombre`, `apellidos`, `dpi`, `nit`, `email1`, `email2`, `tel1`, `tel2`) VALUES (NULL,:_value2,:_value3,:_value4,:_value5,:_value6,:_value7,:_value8,:_value9,:_value10,:_value11);');

            $insert->bindValue('_value2', $a->getTipo());
            $insert->bindValue('_value3', $a->getCarnet());
            $insert->bindValue('_value4', $a->getNombre());
            $insert->bindValue('_value5', $a->getApellidos());
            $insert->bindValue('_value6', $a->getDpi());
            $insert->bindValue('_value7', $a->getNit());
            $insert->bindValue('_value8', $a->getCorreo1());
            $insert->bindValue('_value9', $a->getCorreo2());
            $insert->bindValue('_value10', $a->getTel1());
            $insert->bindValue('_value11', $a->getTel2());
            $insert->execute();
        } catch (Exception $ex) {
            echo 'Error: ' . $ex->getMessage();
            return false;
        }

        return true;
    }

    public static function all()
    {
        $conexion = Db::getConnect();

        $listaAlumnos = [];

        try {

            //consultar la data con estado activo
            $consultar = $conexion->query('SELECT * FROM alumno ORDER BY id;');

            foreach ($consultar->fetchAll() as $i) {
                $listaAlumnos[] = new Alumno(
                    $i['id'],
                    $i['tipo'],
                    $i['carnet'],
                    $i['nombre'],
                    $i['apellidos'],
                    $i['dpi'],
                    $i['nit'],
                    $i['email1'],
                    $i['email2'],
                    $i['tel1'],
                    $i['tel2']
                );
            }

            //code...
        } catch (Exception $ex) {
            echo 'Error: ' . $ex->getMessage();
        }

        return $listaAlumnos;
    }

    public static function obtener($id)
    {
        $conexion = Db::getConnect();


        try {


            $query = $conexion->prepare('SELECT * FROM alumno WHERE id = :id');
            $query->bindValue('id', $id);
            $query->execute();

            $alumnoFech = $query->fetch(); // obtener el paciente

            //se mapea
            $alumno = new Alumno(
                    $alumnoFech['id'],
                    $alumnoFech['tipo'],
                    $alumnoFech['carnet'],
                    $alumnoFech['nombre'],
                    $alumnoFech['apellidos'],
                    $alumnoFech['dpi'],
                    $alumnoFech['nit'],
                    $alumnoFech['email1'],
                    $alumnoFech['email2'],
                    $alumnoFech['tel1'],
                    $alumnoFech['tel2']
                );

            //code...
        } catch (Exception $ex) {
            echo 'Error: ' . $ex->getMessage();
        }


        return $alumno;
    }

    public static function actualizar($p)
    {
        $conexion = Db::getConnect();

        try {

            $insert = $conexion->prepare('UPDATE paciente SET nombre = :nombre, apellido = :apellido, sintomas = :sintomas, gravedad = :gravedad WHERE id_paciente = :id;');

            $insert->bindValue('nombre', $p->getNombre());
            $insert->bindValue('apellido', $p->getApellido());
            $insert->bindValue('sintomas', $p->getSintomas());
            $insert->bindValue('gravedad', $p->getGravedad());
            $insert->bindValue('id', $p->getIdPaciente());

            $insert->execute();
        } catch (Exception $ex) {
            echo 'Error: ' . $ex->getMessage();
            return false;
        }

        return true;
    }

    public static function delete($id)
    {
        $conexion = Db::getConnect();

        try {

            $insert = $conexion->prepare('UPDATE paciente SET estado = :estado WHERE id_paciente = :id;');

            $insert->bindValue('estado', 0); //eliminado
            $insert->bindValue('id', $id);

            $insert->execute();
        } catch (Exception $ex) {
            echo 'Error: ' . $ex->getMessage();
            return false;
        }

        return true;
    }
}
