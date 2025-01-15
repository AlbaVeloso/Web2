<?php

if(isset($_GET["idincidencia"])) { 
    include("conexiondb.php");
    try {
        // Preparar y ejecutar la consulta SQL
        $sql = "DELETE FROM incidencias WHERE id = :id";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':id', $_GET["idincidencia"]);
        $stmt->execute();
       header("Location: main.php");
}catch(PDOException $e) {
    header("Location: main.php");
}
}else{
    header("Location: main.php");
}
?>
