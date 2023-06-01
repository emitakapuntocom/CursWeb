<?php
    $include = include("./config.php");
    $con = connect();

    if($include && $con)
    {
        $ID_USUARIO = 1;
        $descripcion = "Descripcion nueva";
        $fecha = "01-06-2023";
        $hora = "10:00";
        $corazon = 10;
        $n_comentarios = 30;
        $n_retuits = 50;

        //$peticion = "INSERT INTO publicacion VALUES ( 0, 1, '$descripcion','$fecha','$hora',$corazon,$n_comentarios,$n_retuits)";
        //$query = mysqli_query($con, $peticion);

        $sql = "SELECT * FROM publicacion";
        $query = mysqli_query($con, $sql);

        /*var_dump($datos);
        echo '<br>';
        echo '<br>';
        echo '<br>';

        $datos = mysqli_fetch_assoc($query);
        echo '<br>';
        echo '<br>';
        echo '<br>';
        var_dump($datos);

        $datos = mysqli_fetch_assoc($query);
        echo '<br>';
        echo '<br>';
        echo '<br>';
        var_dump($datos);*/

        //var_dump($query);
    
        while($row = mysqli_fetch_assoc($query))
        {
            echo '<br>';
            var_dump($row);
        }

    }

?>