<?php
    require "config.php";
    $conexion = connect();
    if(!$conexion){
        echo "No se pudo conectar con la base";
    }else{
        $nombre = (isset($_POST["nombre"]) && $_POST ["name"] != "")? $_POST["nombre"] : false;
        $altura = (isset($_POST["altura"]) && $_POST ["altura"] != "")? $_POST["altura"] : false;
        $peso = (isset($_POST["peso"]) && $_POST ["peso"] != "")? $_POST["peso"] : false;
        $exp_base = (isset($_POST["exp_base"]) && $_POST ["exp_base"] != "")? $_POST["exp_base"] : false;
        $sql = "INSERT (pok_name,pok_height,pok_weight ";
    }
?>