<?php
    const DBHOST ="localhost";
    const DBUSER ="root";
    const PASSWORD = "";
    const DB = "myTuiter";

    function connect(){
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB); 

        return $conexion;
    }


?>