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
/*
var papeleras=document.getElementsByClassName("fa-trash");
for (let index = 0; index < papeleras.length; index++) {
    const element = papeleras[index];
    element.onclick=function(event)
    {
        event.target.parentElement.parentElement.remove();
        alert("Borrado con éxito");
    }
}
    */
// Función para añadir la fecha de hoy en el input de fecha
document.getElementById("fecha").valueAsDate = new Date();

/*
// Función para añadir una fila a la tabla a través del formulario
var form = document.getElementById("formIncidencias");
var tabla = document.getElementById("tbodyIncidencias");
form.onsubmit = function(event){
    event.preventDefault();
    var fechaOriginal = document.getElementById("fecha").value; // Guardar el valor de la fecha
    var fila = document.createElement("tr");
    var td1 = document.createElement("td");
    var td2 = document.createElement("td");
    var td3 = document.createElement("td");
    var td4 = document.createElement("td");
    td1.innerText = getNextId("tablaIncidencias");
    td2.textContent = formatearFecha(fechaOriginal);
    td3.textContent = document.getElementById("descripcion").value;
    td4.innerHTML = '<i class="fa-solid fa-eye"></i><i class="fa-solid fa-pen-to-square"></i><i class="fas fa-trash"></i>';
    fila.appendChild(td1);
    fila.appendChild(td2);
    fila.appendChild(td3);
    fila.appendChild(td4);
    tabla.appendChild(fila);
    form.reset();
    document.getElementById("fecha").value = fechaOriginal; // Restaurar el valor de la fecha

    var papeleras = document.getElementsByClassName("fa-trash");
    for (let index = 0; index < papeleras.length; index++) {
        const element = papeleras[index];
        element.onclick = function(event) {
            event.target.parentElement.parentElement.remove();
            alert("Borrado con éxito");
        }
    }
}

function formatearFecha(fechaOriginal){
    var datosFecha = fechaOriginal.split("-");
    return datosFecha[2] + "/" + datosFecha[1] + "/" + datosFecha[0];
}

function getNextId(idTabla) {
    var tablaIncidencia = document.getElementById(idTabla);
    var rows = tablaIncidencia.getElementsByTagName('tr');
    var maxId = 0;
    for (var i = 1; i < rows.length; i++) { // Start from 1 to skip the header row
        var id = parseInt(rows[i].getElementsByTagName('td')[0].innerText);
        if (id > maxId) {
            maxId = id;
        }
    }
    return maxId + 1;
}

console.log(getNextId());

*/




