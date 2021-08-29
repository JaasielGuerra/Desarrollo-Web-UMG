<?php

/*
$colores = array("azul","verde","violeta");
echo $colores[2];
*/

$arreglo = ['persona1','persona2','persona3','persona4','persona5'];
$contador = count($arreglo);


foreach($arreglo as $item){
    echo $item;
    echo '<br />';

}
for($i=0; $i<$contador; $i++) {
    echo $contador[$i]."<br />";
}

array_push($arreglo, "Jonatan");

    foreach($arreglo as $item){
        echo $item;
        echo $item."<br />";
    }

    $variables = array_pop($arreglo);
    print_r($arreglo);
    

?>