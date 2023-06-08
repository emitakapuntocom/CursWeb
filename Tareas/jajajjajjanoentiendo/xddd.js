const miRegex = /[\w\.]*@(gmail|hotmail)\,con/1;
const miRegex2 = new RegExp ("[\w\.]*@(gmail|hotmail)\.com", "i");

var correo = "emi.taka06@gmail.com";

if(miRegex.test(correo)){
    alert("Está bien tu correo");
}
else{
    alert("Está mal tu correo");
}