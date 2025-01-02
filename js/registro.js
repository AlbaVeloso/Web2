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
        btnCrear.disabled=false;
        msg.style.display="none"
    }else{
        btnCrear.disabled=true;
        msg.style.display="block"
        }}