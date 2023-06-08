<?php   
    require "seguridad.php";
    $mensaje = (isset( $_POST["mensaje"]) && $_POST["mensaje"] )?$_POST["mensaje"]: "No hay mensaje";
    $contra = (isset( $_POST["contra"]) && $_POST["contra"] )?$_POST["contra"]: "No hay contraseña";

    //cifrado
    $mensajeCifrado = cifrar($mensaje);
    $mensajeDescifrado = descifrar($mensajeCifrado);
    echo "Mensaje cifrado: $mensajeCifrado <br>";
    echo "Mensaje original: $mensajeDescifrado <br>";
    //hashes
    // $sal = generarSal();
    // $pimienta = generarPimienta();
    // $contraHash = hashearContra($contra);
    // echo "Contraseña: $contraHash <br>";
    // if(verificar_contra()){
    //     echo "Contraseña correcta";
    // }else{
    //     echo "Contraseña incorrecta";
    // }
?>