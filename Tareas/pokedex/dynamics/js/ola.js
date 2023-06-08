window.addEventListener("load",()=>{
    const btnAgregar =document.getElementById('btn-agregar');
    const divAgregar =document.getElementById('contenedor-agregar');
    const select = document.getElementById('select-tipos');
    const formAgregar = document.getElementById('form-nuevo');

    fetch("../dynamics/php/consultar.php")
        .the((respuesta=>{
            return respuesta.json();
        })).then((datosJSON)=>{
            console.log(datosJSON);
            for(tipo of datosJASON){
                select.innerHTML += `
                    <option value = {tipo.type_id}>${tipo.type_name}</option>
                `;
            }
        })

    btnAgregar.addEventListener("click", ()=>{
        divAgregar.style.display = "block";
    });
    btnEnviar.addEventListener("click", (e)=>{
        e.preventDefault();
        datosForm = new FormData(formAgregar);
        fetch("./dynamics/php/insertar.php", {
            method: "POST",
            body: datosForm
        }).then((respuesta)=>{
            return respuesta.json();
        }).then ((datosJSON)=> {
            console.log(datosJSON);
        })
    })
})
