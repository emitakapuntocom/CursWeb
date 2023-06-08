class RPGpersonaje{
    constructor(...args){
        this.Nombre= args[0];
        this.F= args[1];
        this.D= args[2];
        this.C= args[3];
        this.Ca= args[4];
        this.I=args[5];
    }
    Presentarse(){
        console.log("Hola mi nombre es "+this.Nombre);
    }
}
class Mago extends RPGpersonaje{
    constructor(...args){
        args
        super(args)
        this.escuela= escuelaDeHechiceria;
        this.spellList=[];
    }
    lanzarHechizo(){
        console.log(this.Nombre+" lanza el hechizo "+rhis.spellList[0])
    }
    Atacar(Personaje1){
        if(Personaje1.C>this.I){
            console.log(this.Nombre+" ha atacado pero falló");
        }
        else{
            console.log(this.Nombre+"ataca a"+Personaje1.Nombre+ "exitosamente");
        }
    }
}
/*function funcionMisteriosa(funcion){
    console.log("Atencion estoy a punto de ejecutar")
    funcionx()
}
functionfuncion2(parametro1,parametro2){
    let x= patrametro1+parametro2;
    console.log(x)
}
    funcionMisteriosa(()=>{
    console.log("Hola soy una funcion anonima");
}
);*/
let Personaje1= new RPGpersonaje("Juan",12,16,12,10)
console.log(Personaje1);
Personaje1.Presentarse();

let Mago1= new Mago("Harry Potter",10,14,8,14)
console.log(Mago1);
Mago1.Presentarse();
Mago1.spellList.push("Reanimar a los muertos");
Mago1.lanzarHechizo();
Mago1.Atacar(Personaje1);