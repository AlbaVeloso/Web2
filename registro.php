<?php
if(isset($_POST{"nombre"}) ){
var_dump($_POST);
exit();  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/registro.css">
    </head>
<body>
    <div>
        <a id="botonlogo" href="index.html"><img src="img/descarga.png" alt="Logo"></a>
        <h1>Crea tu cuenta</h1>       
        <form class="register" action="procesar.php" method="POST">  
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="Nombre">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="Apellido">
            <label for="usuario">Email</label>
            <input type="email" name="email" id="Email">
            <label for="fecha">Fecha de nacimiento</label>
            <input type="date" name="fecha" id="Fechanacimiento">            
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="pass">
            <label for="password">Introduce de nuevo la contraseña</label>
            <input type="password" name="" id="password">
            <span id="msg">*Las contraseñas deben ser iguales.</span>
            <button id="btnCrear" disabled>Crear usuario</button>
        </form> 
        <p><a href="login.html">¿Ya tienes una cuenta?</a></p> 
    </div>
    <script src="js/registro.js"></script>
</body>
</html>


