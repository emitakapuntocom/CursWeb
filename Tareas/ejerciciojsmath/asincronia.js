function cuadrados(valor){
    setTimeout(() =>{
        callback(valor, valor * valor);
}, Math.floor(Math.random()*10000));
}
cuadrados(0, (valor, resultado)=>{
    console.log("Del valor ${valor} el resultado es ${resultado}");
    cuadrados(1, (valor, resultado)=>{
        console.log(`Del valor ${valor} el resultado es ${resultado}`);
        cuadrados(2);
    );
});
cuadrados(1);
cuadrados(2);
cuadrados(3);