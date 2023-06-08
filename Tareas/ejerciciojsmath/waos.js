window.addEventListener("load",() =>{
    let btnNo = document.querySelector("#no");
    let btnSi = document.querySelector("#si");
    let contenedor = document.querySelector("#contenedor");
    let contador = 0;

    btnNo.addEventListener("mouseover", () =>{
        if(contador == 0){
            contenedor.removeChild(btnNo);
            document.body.appendChild(btnNo);
            contador++;
            btnNo.style.position = "absolute";
        }
        let x = Math.floor(Math.random()*windows.innerWidth+10);
        let y = Math.floor(Math.random()*windows.innerHeight+10);
        
        btnNo.style.left = x + "px";
        btnNo.style.top = y + "px";
    });
    
    btnNo.addEventListener("click",() =>{
        alert(":'v");
    })

    btnSi.addEventListener("click",() => {
        alert("Ya sabía Bv");
    })
});