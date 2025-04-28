<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_efi.css"> <!-- Enlace a la hoja de estilos para la página -->
    <title>Document</title>
</head>
<body>
    
    <?php   
        // Se incluye el encabezado común a todas las páginas (header_2.html).
        require_once 'content_princi/header_2.html';   
    ?>

    <!-- Formulario para registrar la eficiencia -->
    <form action="registrar_efi_2.php"  method="post" enctype="multipart/form-data">
        <div class="reg">

            <div id="formu">
                
                <!-- Botón para regresar a la página anterior (operario.php) -->
                <a href="operario.php"><img id="x" src="img/equis.jpg" alt=""></a><br><br>

                <!-- Campo para ingresar la cantidad realizada -->
                <label for="">
                    Cantidad realizada
                    <input type="number" name="cantidad" id="can_rea" required>
                </label>
                <br><br><br>

                <!-- Campo para ingresar el tiempo gastado -->
                <label for="">
                   Tiempo gastado en min
                   <input type="number" name="tiempo" id="tie_gas" required>
                </label>
                <br><br><br>

                <!-- Campo para ingresar la fecha -->
                <label for="">
                   Fecha
                   <input type="date" name="fecha" id="fec_ind" required>
                </label>
                <br><br><br>
                
                <!-- Dropdown para seleccionar el detalle de la orden -->
                <label for="">
                    <?php
                        // Conexión a la base de datos
                        require_once 'conexion.php';

                        // Se hace una consulta para obtener los detalles de las órdenes asignadas al usuario
                        $respuesta = mysqli_query($conex, "SELECT d.id_det, u.nom_usu, o.nro_ord, o.fec_ent, o.nom_pro, o.can_tot, o.pro_ord
                                                            FROM detalle_orden d
                                                            JOIN usuario u ON d.id_usu_fk = u.id_usu
                                                            JOIN orden o ON d.id_ord_fk = o.id_ord
                                                            WHERE u.id_usu = '$_REQUEST[cod]'") 
                                                            or die("error".mysqli_error($conex));

                        $datos = [];

                        // Desplegar el dropdown con los detalles de las órdenes
                        echo "Detalle orden<select name='orden' id='orden' onchange='llenarInputs()'>";
                        echo "<option value=''>seleccione</option>";

                        // Recorrer los resultados y mostrar cada detalle de orden en el dropdown
                        while ($reg = mysqli_fetch_array($respuesta)) {
                            $datos[$reg['id_det']] = $reg;
                            echo "<option value='" . $reg['id_det'] . "'>" . $reg['id_det'] . "</option>";
                        }
                        echo "</select><br><br>";
                    ?>

                    <!-- Div que muestra los detalles de la orden seleccionada -->
                    <div class="orden"> 
                        Numero orden: <input type="text" id="nro_ord" disabled><br>
                        Fecha entrega: <input type="text" id="fec_ent" disabled><br>
                        Producto: <input type="text" id="nom_pro" disabled><br>
                        Cantidad: <input type="text" id="can_tot" disabled><br>
                        Proceso: <input type="text" id="pro_ord" disabled><br>
                    </div>

                    <!-- Se pasa la variable $datos como un objeto JavaScript -->
                    <script>
                        const datos = <?php echo json_encode($datos); ?>;
                    </script>

                </label>

                <!-- Dropdown para seleccionar el producto estandar -->
                <label for="">
                    <?php
                        // Se consulta la tabla promedio para obtener los productos estándar
                        $registro = mysqli_query($conex, "SELECT * FROM promedio") 
                                    or die("error".mysqli_error($conex));

                        $dat = [];

                        // Desplegar el dropdown con los productos estándar
                        echo "<br>Estandar<select name='estandar' id='estandar' onchange='llenarInputsp()'>";
                        echo "<option value=''>seleccione</option>";

                        // Recorrer los resultados y mostrar cada estándar en el dropdown
                        while ($reg = mysqli_fetch_array($registro)) {
                            $dat[$reg['id_pro']] = $reg;
                            echo "<option value='" . $reg['id_pro'] . "'>" . $reg['id_pro'] . "</option>";
                        }
                        echo "</select><br><br>";
                    ?>

                    <!-- Div que muestra los detalles del producto estándar -->
                    <div class="orden"> 
                        Producto estandar: <input type="text" id="pro_pro" disabled><br>
                        Proceso estandar: <input type="text" id="act_pro" disabled><br>
                    </div>

                    <!-- Se pasa la variable $dat como un objeto JavaScript -->
                    <script>
                        const dat = <?php echo json_encode($dat); ?>;
                    </script>
                </label>
                <br><br>

                <!-- Botones para enviar el formulario o limpiar los campos -->
                <label for="">
                    <input type="submit" value="cargar" id="carg">
                    <input type="reset" value="limpiar" id="limp">
                </label>
                <br><br>

                <!-- Botón para volver a la página de supervisor -->
                <label for="">
                    <button id="button"><a href="supervisor.php">Volver</a></button>
                </label>
            </div>
        </div>
    </form>

    <!-- Archivo JavaScript que contiene las funciones necesarias para la página -->
    <script src="javascript/funciones.js"></script>

    <?php   
        // Se incluye el pie de página común a todas las páginas (footer.html).
        require_once 'content_princi/footer.html';  
    ?>

</body>
</html>
