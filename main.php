<?php
session_start();
if(! isset($_SESSION["usuario"])){
    header("Location: login.php");

}
include("conexiondb.php");
$sql="select * from incidencias";
$result=$conexion->query($sql);
include("./partials/cabezera.php");


?>

        <section class="contenedorPrincipal">
            <h3>Listado Incidencias</h3>
            <div class="incidencias">
                <form action="nueva_incidencia.php" method="post" id="formIncidencias">
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" id="fecha">
                    <label for="descripcion">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" required>
                    <button>Enviar</button> 
                </form>


            </div>
            <div class="lista">
                <table id="tablaIncidencias">
                    <thead>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Descripción</th>
                        <th>Operaciones</th>
                    </thead>
                    <tbody id="tbodyIncidencias">
                        <?php
                        while($row=$result->fetch()){
                            echo "<tr>
                            <td>".$row["id"]."</td>
                            <td>".$row["fecha"]."</td>
                            <td>".$row["descripcion"]."</td>
                            <td>
                                <a href='editar_incidencia.php?idincidencia=".$row['id']."'<i class='fa-solid fa-pen-to-square'></i>
                                <a href='borrar_incidencia.php?idincidencia=".$row['id']."'><i class='fa-solid fa-trash'></i></a>
                                                       
                            </td>                            
                            </tr>";
                        }
                        ?>
                       
                     
                </table>
            </div>

        </section>
<?php
include("./partials/footer.php");
?>