var user=document.getElementById("imgUser");
user.onclick=function(){
    var menuUser=document.getElementById("menuUser");
    if(menuUser.style.display=="block"){
        menuUser.style.display="none";
        }
    else{
        menuUser.style.display="block";

    }
}
var menuMovil=document.getElementById("menuMovil");
var lista=document.getElementById("lista");
lista.onclick=function(){
    if(menuMovil.style.display=="block"){
        menuMovil.style.display="none";
    }else{
        menuMovil.style.display="block"
    }
}
