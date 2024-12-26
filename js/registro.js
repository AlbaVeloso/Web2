var inputPass=document.getElementById("pass");
var inputRePass=document.getElementById("password");
var btnCrear=document.getElementById("btnCrear");
var msg=document.getElementById("msg")

inputPass.oninput=validacionInput;
inputRePass.oninput=validacionInput;

function validacionInput (){
    var txtPass=inputPass.value;
    var txtRePass=inputRePass.value;
    if(txtPass==txtRePass){
        btnCrear.disable=false;
        msg.style.display="none"
    }else{
        btnCrear.disable=true;
        msg.style.display="block"
        }}