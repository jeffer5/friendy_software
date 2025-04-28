<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Establece el conjunto de caracteres para la página -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Asegura la visualización correcta en dispositivos móviles -->
    <link rel="stylesheet" href="styles/styles_ord.css"> <!-- Vincula la hoja de estilos CSS para el diseño de la página -->
    <title>Document</title> <!-- Título que se muestra en la pestaña del navegador -->
</head>
<body>
    
    <?php   
        // Incluye el encabezado común de la página
        require_once 'content_princi/header_2.html';   
    ?>

    <!-- Formulario para registrar una nueva orden -->
    <form action="registrar_orden_2.php" method="post" enctype="multipart/form-data">
        <div class="reg"> <!-- Div contenedor del formulario -->

            <div id="formu"> <!-- Div específico para el formulario -->
                
                <!-- Enlace para cerrar la ventana o regresar -->
                <a href="supervisor.php"><img id="x" src="img/equis.jpg" alt=""></a><br><br>

                <!-- Campos del formulario para ingresar datos de la orden -->
                <label for="">
                    Número de orden
                    <input type="number" name="numord" id="num_ord" required> <!-- Campo para ingresar el número de la orden -->
                </label>
                <br><br><br>

                <label for="">
                    Nombre cliente
                    <input type="text" name="nomcli" id="nom_cli" required> <!-- Campo para ingresar el nombre del cliente -->
                </label>
                <br><br><br>

                <label for="">
                    Fecha de entrega
                    <input type="date" name="fecent" id="fec_ent" required> <!-- Campo para seleccionar la fecha de entrega -->
                </label>
                <br><br><br>

                <label for="">
                    Nombre del producto
                    <input type="text" name="nompro" id="nom_pro" required> <!-- Campo para ingresar el nombre del producto -->
                </label>
                <br><br><br>

                <label for="">
                    Cantidad total
                    <input type="number" name="cantot" id="can_tot" required> <!-- Campo para ingresar la cantidad total de productos -->
                </label>
                <br><br><br>

                <label for="">
                    Proceso a realizar
                    <input type="text" name="proord" id="pro_ord" required> <!-- Campo para ingresar el proceso a realizar -->
                </label>
                <br><br><br>

                <!-- Botones de acción: uno para enviar el formulario y otro para limpiar los campos -->
                <label for="">
                    <input type="submit" value="Cargar" id="carg">
                    <input type="reset" value="Limpiar" id="limp">
                </label>
                <br><br>

                <!-- Botón de regreso a la página del supervisor -->
                <label for="">
                    <button id="button"><a href="supervisor.php">Volver</a></button>
                </label>
            </div>
        </div>
    </form>

    <?php   
        // Incluye el pie de página común de la página
        require_once 'content_princi/footer.html';  
    ?>

</body>
</html>
