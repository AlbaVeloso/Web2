<?php
session_start();
if(isset($_POST["fecha"])){
    include("conexiondb.php");
    try {
        // Preparar y ejecutar la consulta SQL
        $idusuario = $_SESSION["idusuario"];
        $sql = "INSERT INTO incidencias (fecha, descripcion, idusuario) 
                VALUES (:fecha, :descripcion, :idusuario)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':fecha', $_POST["fecha"]);
        $stmt->bindParam(':descripcion', $_POST["descripcion"]);
        $stmt->bindParam(':idusuario', $idusuario);
        $stmt->execute();
    
        echo "Registro insertado exitosamente";
    
        // Redirigir a la página de login   
        header("Location: main.php");
    } catch (PDOException $e) {
        echo "Conexión fallida: " . $e->getMessage();
    }


    
}else{
    header("Location: main.php");
}




?>