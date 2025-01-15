<?php
if (isset($_POST["email"])) {
    include("conexiondb.php");
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Preparar y ejecutar la consulta para obtener el hash de la contraseña almacenada
    $sql = "SELECT password,id,nombre,apellidos,foto FROM usuarios WHERE email = :email";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($result && password_verify($password, $result['password'])) {

        // Redirigir a la página de inicio o dashboard
        session_start();        
        $_SESSION["usuario"] = $email;
        $_SESSION['foto'] = $result['foto'];
        $_SESSION["idusuario"] = $result['id'];
        $_SESSION["password"] = $password;
        $_SESSION['nombre'] = $result['nombre'];
        $_SESSION['apellidos'] = $result['apellidos'];
        
    header("Location: main.php");
    } else {
        $error = "Email o contraseña incorrectos";
    }

    // Cerrar la conexión
    $conexion = null;
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web2 - Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div>
        <img src="img/descarga.png" alt="Logo">
        <form action="" method="post" id="formulario">
            <label for="">Usuario</label>
            <input type="email" name="email" id="usuario" placeholder="Introduce tu email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button>Login</button>
            <a href="http://localhost/Web2/registro.php" class="boton-texto">Si no tiene cuenta, créela aquí.</a>
            <?php if (isset($error)) { ?>
                <p class="error"><?php echo $error;
            } ?>
            </p>
    </div>
    </form>

    <script src="js/login.js"></script>
</body>

</html>