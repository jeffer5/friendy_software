<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Establece el conjunto de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Asegura la correcta visualización en dispositivos móviles -->
    <link rel="stylesheet" href="styles/styles_esta.css"> <!-- Enlace a la hoja de estilos CSS -->
    <title>Document</title> <!-- Título de la página que se muestra en la pestaña del navegador -->
</head>
<body>
    
    <?php   
        // Se incluye el encabezado común a todas las páginas (header_2.html).
        require_once 'content_princi/header_2.html';   
    ?>

    <!-- Formulario para registrar el estándar -->
    <form action="registrar_estandar_2.php" method="post" enctype="multipart/form-data">
        <div class="reg"> <!-- Contenedor principal para el formulario -->

            <div id="formu"> <!-- Contenedor del formulario -->
                
            <!-- Enlace con una imagen que actúa como botón para regresar a la página del supervisor -->
            <a href="supervisor.php"><img id="x" src="img/equis.jpg" alt=""></a><br><br>

                <!-- Campo para ingresar el nombre del producto -->
                <label for="" >
                    Producto<input type="text" name="pro" id="pro_pro" required> <!-- Input de texto, campo obligatorio -->
                </label>
                <br><br><br>
                
                <!-- Campo para ingresar el proceso -->
                <label for="" >
                    Proceso<input type="text" name="proceso" id="act_pro" required> <!-- Input de texto, campo obligatorio -->
                </label>
                <br><br><br>
                
                <!-- Campo para ingresar la cantidad estándar -->
                <label for="">
                    Cantidad estándar<input type="number"  name="cantidad" id="can_pro" required> <!-- Input numérico, campo obligatorio -->
                </label>
                <br><br><br>
                
                <!-- Campo para ingresar el estándar en minutos -->
                <label for="">
                    Estándar en minutos<input type="number"  name="tiempo" id="tie_pro" required> <!-- Input numérico, campo obligatorio -->
                </label>
                <br><br><br>

                <!-- Botones para enviar o limpiar el formulario -->
                <label for="" >
                    <input type="submit" value="Cargar" id="carg"> <!-- Botón de envío para el formulario -->
                    <input type="reset" value="Limpiar" id="limp"> <!-- Botón para limpiar los campos del formulario -->
                </label>
                <br><br>

                <!-- Botón para regresar a la página principal del supervisor -->
                <label for="">
                    <button id="button"><a href="supervisor.php">Volver</a></button>
                </label>
            </div>
        </div>
    </form>

    <?php   
        // Se incluye el pie de página común a todas las páginas (footer.html).
        require_once 'content_princi/footer.html';  
    ?>

</body>
</html>
