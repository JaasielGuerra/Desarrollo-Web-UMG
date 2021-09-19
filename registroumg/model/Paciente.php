<?php

class Paciente
{

    private $idPaciente;
    private $nombre;
    private $apellido;
    private $sintomas;
    private $gravedad;
    private $estado;

    function __construct($idPaciente, $nombre, $apellido, $sintomas, $gravedad, $estado)
    {
        $this->idPaciente = $idPaciente;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sintomas = $sintomas;
        $this->gravedad = $gravedad;
        $this->estado = $estado;
    }

    /**
     * Get the value of idPaciente
     */
    public function getIdPaciente()
    {
        return $this->idPaciente;
    }

    /**
     * Set the value of idPaciente
     *
     * @return  self
     */
    public function setIdPaciente($idPaciente)
    {
        $this->idPaciente = $idPaciente;

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
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of sintomas
     */
    public function getSintomas()
    {
        return $this->sintomas;
    }

    /**
     * Set the value of sintomas
     *
     * @return  self
     */
    public function setSintomas($sintomas)
    {
        $this->sintomas = $sintomas;

        return $this;
    }

    /**
     * Set the value of gravedad
     *
     * @return  self
     */
    public function setGravedad($gravedad)
    {
        $this->gravedad = $gravedad;

        return $this;
    }


    /**
     * Get the value of gravedad
     */
    public function getGravedad()
    {
        return $this->gravedad;
    }



    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }



    /**
     * Metodos de accion sobre la base de datos
     */

    public static function save($p)
    {
        $conexion = Db::getConnect();

        try {

            $insert = $conexion->prepare('INSERT INTO paciente VALUES (NULL, :nombre, :apellido, :sintomas, :gravedad, :estado);');

            $insert->bindValue('nombre', $p->getNombre());
            $insert->bindValue('apellido', $p->getApellido());
            $insert->bindValue('sintomas', $p->getSintomas());
            $insert->bindValue('gravedad', $p->getGravedad());
            $insert->bindValue('estado', $p->getEstado());

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

        $listaPacientes = [];

        try {

            //consultar la data con estado activo
            $consultar = $conexion->query('SELECT * FROM paciente WHERE estado = 1 ORDER BY id_paciente;');

            foreach ($consultar->fetchAll() as $i) {
                $listaPacientes[] = new Paciente($i['id_paciente'], $i['nombre'], $i['apellido'], $i['sintomas'], $i['gravedad'], $i['estado'],);
            }

            //code...
        } catch (Exception $ex) {
            echo 'Error: ' . $ex->getMessage();
        }

        return $listaPacientes;
    }

    public static function obtener($idPaciente)
    {
        $conexion = Db::getConnect();


        try {


            $query = $conexion->prepare('SELECT * FROM paciente WHERE id_paciente = :id');
            $query->bindValue('id', $idPaciente);
            $query->execute();

            $pacienteFetch = $query->fetch(); // obtener el paciente

            //se mapea
            $paciente = new Paciente($pacienteFetch['id_paciente'], $pacienteFetch['nombre'], $pacienteFetch['apellido'], $pacienteFetch['sintomas'], $pacienteFetch['gravedad'], $pacienteFetch['estado']);

            //code...
        } catch (Exception $ex) {
            echo 'Error: ' . $ex->getMessage();
        }


        return $paciente;
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

    public static function cantidadPacientesGravedad($gravedad)
    {
        $conexion = Db::getConnect();
        $cont = 0;

        try {

            $query = $conexion->prepare('SELECT COUNT(id_paciente) total FROM paciente WHERE gravedad = :g');
            $query->bindValue('g',$gravedad);
            $query->execute();

            $cont = $query->fetch()['total'];

        } catch (Exception $ex) {
            echo 'Error: ' . $ex->getMessage();
            return 0;
        }


        return $cont;
    }
}
