<?php


$archivo = fopen("C:\\texto.txt","r");
while(!feof($archivo))
{
    $linea = fgets($archivo);
    echo $linea. "<br/>";

}

fclose($archivo);


?>