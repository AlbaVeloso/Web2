var checkAuth=document.getElementById("autorizacion");
var btnEnviar=document.getElementById("btnEnviar");
checkAuth.onclick=function(){
    if(checkAuth.checked==true){
        btnEnviar.disabled=false;
    }else{
        btnEnviar.disabled=true;
    }
}