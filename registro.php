<!DOCTYPE html>
<html lang="es"> <!-- lenguaje en español del documento -->
<head>
    <meta charset="UTF-8"> <!-- Codificación UTF-8 para caracteres especiales -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsivo en dispositivos móviles -->
    <link rel="stylesheet" href="styles/styles_reg.css"> <!-- Hoja de estilos específica del formulario de registro -->
    <title>Document</title> <!-- Título de la pestaña del navegador -->
</head>
<body>
    
    <!-- Inserta el encabezado desde un archivo HTML externo -->
    <?php   
        require_once 'content_princi/header_2.html';  
    ?>

    <!-- Formulario de registro de usuario -->
    <form action="registro_2.php" method="post" enctype="multipart/form-data">
        <div class="reg">
            <div id="formu">

                <!-- Botón para cerrar el formulario o regresar a página principal -->
                <a href="princi.php"><img id="x" src="img/equis.jpg" alt="Cerrar formulario"></a><br><br>

                <!-- Campo de nombre -->
                <label for="name">Nombre
                    <input type="text" name="nom" id="name" required>
                </label>
                <br><br><br>

                <!-- Campo de apellido -->
                <label for="ape">Apellido
                    <input type="text" name="apel" id="ape" required>
                </label>
                <br><br><br>

                <!-- Selección del tipo de documento -->
                <label for="tid">Tipo documento
                    <select name="tdo" id="tid" required>
                        <option value="">Escoga</option>
                        <option value="CC">CC</option>
                        <option value="CE">CE</option>
                        <option value="TI">TI</option>
                        <option value="PT">PT</option>
                    </select>
                </label>
                <br><br><br>

                <!-- Número de documento -->
                <label for="ndoc">Número documento
                    <input type="number" name="doc" id="ndoc" required>
                </label>
                <br><br><br>

                <!-- Teléfono -->
                <label for="tel">Teléfono
                    <input type="number" name="tele" id="tel" required>
                </label>
                <br><br><br>

                <!-- Nombre de usuario -->
                <label for="usua">Usuario
                    <input type="text" name="usua" id="usua" required>
                </label>
                <br><br><br>

                <!-- Contraseña -->
                <label for="pass">Contraseña
                    <input type="password" name="pass" id="pass" required>
                </label>
                <br><br><br>

                <!-- Rol del usuario -->
                <label for="rol">Rol
                    <select name="rol" id="rol" required>
                        <option value="">Escoga</option>
                        <option value="supervisor">Supervisor</option>
                        <option value="operario">Operario</option>
                    </select>
                </label>
                <br><br><br>

                <!-- Subida de foto -->
                <label for="foto"><center>Foto
                    <input type="file" name="foto" id="foto">
                </center></label>
                <br><br>

                <!-- Botones de enviar y limpiar formulario -->
                <label>
                    <input type="submit" value="Cargar" id="carg">
                    <input type="reset" value="Limpiar" id="limp">
                </label>
                <br><br>

                <!-- Botón para regresar -->
                <label>
                    <button id="button"><a href="princi.html">Volver</a></button>
                </label>

            </div>
        </div>
    </form>

    <!-- Inserta el pie de página desde un archivo externo -->
    <?php   
        require_once 'content_princi/footer.html';  
    ?>
</body>
</html>
