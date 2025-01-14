<?php
session_start();
if(! isset($_SESSION["usuario"])){
    header("Location: login.php");

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <img src="img/descarga.png" alt="">
        <div>
            <img id="imgUser" class="imgUser" src="img/usuario.png" alt="">
            <div id="menuUser" class="menuUser">
                <ul>
                    <li><a href="">Datos de usuario</a></li>
                    <li><a href="cerrar_sesion.php">Cerrar sesión</a></li>
                </ul>
            </div>
        </div>

    </header>
    <main>
        <aside>
            <ul>
                <li><i class="fa-solid fa-cart-shopping"></i>Pedidos</li>
                <li><i class="fa-solid fa-file-invoice"></i>Facturas</li>
                <li><i class="fa-solid fa-circle-exclamation"></i>Incidencias</li>
                <li><i class="fa-solid fa-calendar-days"></i>Calendario</li>
                <li><i class="fa-solid fa-coins"></i>Presupuestos</li>
            </ul>

        </aside>
        <div  class="asideMovil">
            <i id="lista" class="fa-solid fa-bars"></i>
            <ul id="menuMovil">
                <li><i class="fa-solid fa-cart-shopping"></i>Pedidos</li>
                <li><i class="fa-solid fa-file-invoice"></i>Facturas</li>
                <li><i class="fa-solid fa-circle-exclamation"></i>Incidencias</li>
                <li><i class="fa-solid fa-calendar-days"></i>Calendario</li>
                <li><i class="fa-solid fa-coins"></i>Presupuestos</li>
            </ul>
        </div>
        <section class="contenedorPrincipal">
            <h3>Listado Incidencias</h3>
            <div class="incidencias">
                <form action="" id="formIncidencias">
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
                        <tr>
                            <td>1</td>
                            <td>12/12/2021</td>
                            <td>Problema con el servidor</td>
                            <td><i class="fa-solid fa-eye"></i><i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash"></i></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>12/09/2022</td>
                            <td>Problema con el servidor</td>
                            <td><i class="fa-solid fa-eye"></i><i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash"></i></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>12/12/2022</td>
                            <td>Problema con el servidor</td>
                            <td><i class="fa-solid fa-eye"></i><i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash"></i></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>05/01/2023</td>
                            <td>Problema con el servidor</td>
                            <td><i class="fa-solid fa-eye"></i><i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash"></i></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>12/12/2023</td>
                            <td>Problema con el servidor</td>
                            <td><i class="fa-solid fa-eye"></i><i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash"></i></td>
                        </tr>

                </table>
            </div>

        </section>


    </main>
    <footer>
        <p>Todos Los Derechos Reservados © 2025</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>