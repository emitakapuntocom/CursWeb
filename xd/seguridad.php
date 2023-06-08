<?php
    define ("ALGORITMO", "aes-256-abc");
    define("CONTRA", uniqid());
    function cifrar ($mensaje){
        $longitud = openssl_cipher_iv_length(ALGORITMO);
        $vi = openssl_random_pseudo_bytes($longitud);
        define("VI", $vi);
        $mensajecifrado= openssl_encrypt($mensaje, ALGORITMO, 0, VI);
        return $mensaje." cifrado";
    }
    function descifrar ($mensaje){
        $mensajeDescifrado = openssl_decrypt($mensaje,ALGORITMO,CONTRA,0,VI);
        return $mensajeDescifrado;
    }


    // function hashearContra ($contra){
    //     return $contra." hasheada";
    // }
    // function verificar_contra (){
    //     return true;
    // }
    // function generarSal(){
    //     return "Sal";
    // }
    // function generarPimienta(){
    //     return "Pimienta";
    // }
?>