<?php

$nuevonombre=(isset ($_POST["nuevonombre"]) && $_POST["nuevonombre"] != "" )? $_POST["nuevonombre"] : false;
$imagen=(isset ($_POST["imagen"]) && $_POST["imagen"] != "" )? $_POST["imagen"] : false;

echo'sirve <br>';
if(isset($_POST['imagen'])){
    echo 'si subiste un archivo (Y)<br>';
    echo 'el nombre del archivo es: '.$imagen.'?<br>';
}
else{
    echo 'no subiste ningún archivo >:(<br>';
}

if(isset($_POST['nuevonombre'])){
    echo 'el nombre de la imagen es: '.$nuevonombre;
}

?>