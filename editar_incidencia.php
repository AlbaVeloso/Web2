<?php
session_start();
if (! isset($_SESSION["usuario"])) {
    header("location:login.php");
}
if (! isset($_GET["idincidencia"])) {
    header("Location: main.php");
}

include("conexiondb.php");
if(isset($_POST["id"])) {
// Editar incidencia en bbdd
    $sql = "update incidencias set fecha = :fecha, descripcion = :descripcion where id = :id";
    $stm = $conexion->prepare($sql);
    $stm->bindParam(":fecha", $_POST["fecha"]);
    $stm->bindParam(":descripcion", $_POST["descripcion"]);
    $stm->bindParam(":id", $_POST["id"]);
    $stm->execute();
    header("Location: main.php");
} else {

}

$sql = "select * from incidencias where id = :idincidencia";
$stm = $conexion->prepare($sql);
$stm->bindParam(":idincidencia", $_GET["idincidencia"]);
$stm->execute();
$row = $stm->fetch(PDO::FETCH_ASSOC);
if (!$row) {
    header("Location: main.php");
}


include("./partials/cabezera.php");

?>

<div class="contenedorPrincipal">
    <form action="" method="post">

        <label for="id">Id Incidencia</label>
        <input type="text" name="id" id="fecha" value="<?php echo $row["id"] ?>" readonly>
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha" value="<?php echo $row["fecha"] ?>">
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion" value="<?php echo $row["descripcion"] ?>" required>
        <button>Enviar</button>
    </form>
</div>
<?php
include("./partials/footer.php");

?>