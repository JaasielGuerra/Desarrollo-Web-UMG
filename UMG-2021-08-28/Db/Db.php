<?php
class Db
{
    private static $instancia = null;
    
    function __construct()
    {
        # code...
    }
             
    public function getConexion(){
        /**isset funcion que permite validar si la variable existe */
        if(!isset(self::$instancia)){
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instancia = new PDO('mysl:host=localhost;dbname=umg', 'root', 'Umg$2019', $pdo_options);
        }
    }
    
}