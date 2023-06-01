window.addEventListener("load", ()=>{

    const nota = document.getElementById("textoDescripcion");
    const enviar = document.getElementById("btnEnviar");

    var guardado = document.cookie.split("=");
    if(guardado!=""){
        nota.value=guardado[1];
    }

    //document.cookie = "comegalleta = galletita; max-age=" + 60*5;

    nota.addEventListener("keyup", ()=>{
    document.cookie = "comegalleta=" + nota.value + "; max-age=" + 3600;

    enviar.addEventListener("click",()=>{
        document.cookie = "comegalleta=hola; max-age=-1";
    })
});



})