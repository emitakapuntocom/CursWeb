<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nom=(isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : "No llenaste el campo de nombre";

    $apel=(isset($_POST['apellido']) && $_POST["apellido"] != "")? $_POST['apellido'] : "No llenaste el campo de apellido";

    $art=(isset($_POST['artista']) && $_POST["artista"] != "")? $_POST['artista'] : "No llenaste el campo de artista";

    $fech=(isset($_POST['fecha']) && $_POST["fecha"] != "")? $_POST['fecha'] : "No llenaste el campo de fecha";

    $zon=(isset($_POST['zona']) && $_POST["zona"] != "")? $_POST['zona'] : "No llenaste el campo de zona";

    $cat=(isset($_POST['cantidad']) && $_POST["cantidad"] != "")? $_POST['cantidad'] : "No llenaste el campo de cantidad";

    $lug=(isset($_POST['lugar']) && $_POST["lugar"] != "")? $_POST['lugar'] : "No llenaste el campo de lugar";

    $com=(isset($_POST['com']) && $_POST["com"] != "")? $_POST['com'] : "Sin comida extra";

    $est=(isset($_POST['est']) && $_POST["est"] != "")? $_POST['est'] : "Sin lugar de estacionamiento";

    $myg=(isset($_POST['myg']) && $_POST["myg"] != "")? $_POST['myg'] : "No compró meet & great";

    for($i=0; $i<$_POST['cantidad']; $i++){
        echo '<h2 align="center">Resumen de la compra (boletos)</h2>';
        echo '<table border="1" align="center" widht="500">

            <thead>
                <tr>
                    <td colspan="4" align="center">'.$art.'</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="center">'.$nom.'</td>
                    <td align="center">'.$apel.'</td>
                    <td align="center">Fecha: '.$fech.'</td>
                    <td rowspan="3">
                    <img src="https://st.depositphotos.com/1001911/1554/v/950/depositphotos_15540341-stock-illustration-thumb-up-emoticon.jpg" width="125" height="100">
                    </td>
                </tr>
                <tr>
                    <td align="center" rowspan="2">'.$lug.'</td>
                    <td align="center" rowspan="2">Zona '.$zon.' </td>
                    <td align="center" rowspan="2">Extras: <br> 
                    <ul>
                        <li>'.$com.'</li>
                        <li>'.$est.'</li>
                        <li>'.$myg.'</li>
                    </ul>
                    </td>
                </tr>
                <tr></tr>
                <tr><td align="center" colspan="4">¡Gracias por su compra!</td></tr>
            </tbody>
        </table>';
    }


    
    ?>
</body>
</html>