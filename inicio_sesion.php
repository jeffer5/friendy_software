<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a la hoja de estilos específica para esta página -->
    <link rel="stylesheet" href="styles/styles_ini.css">
    <title>Document</title>
</head>
<body>


      <?php
        // Inserta el encabezado desde un archivo HTML externo
        require_once 'content_princi/header.html';
    ?>

    
        <!-- Formulario para iniciar sesión -->
    <form action="inicio_sesion_1.php" method="post">
        <div id="inicio_sesion">

            <!-- Botón (imagen) para volver a la página principal -->
            <a href="index.php"><img id="x" src="img/equis.jpg" alt=""></a><br><br>

            <!-- Campo de entrada para el nombre de usuario -->
            usuario <input type="text" name="usu" id="usu" required><br><br>

            <!-- Campo de entrada para la contraseña -->
            Contraseña <input type="password" name="pas" id="pas" required><br><br><br>

            <!-- Botones para enviar o limpiar el formulario -->
            <input type="submit" name="ing" id="ing" value="ingresar">
            <input type="reset" name="lim" id="limpi" value="limpiar"><br><br>

            <!-- Enlaces para recuperar la contraseña o registrarse -->
            <a id="olv" href="">Olvide mi Contraseña</a> 
            <a id="reg" href="registro.php">Registrarme</a>

        </div>
    </form>

    
        <!-- Botón extra para volver a la página principal -->
    <button id="volver"><a href="princi.php">volver</a></button>


        <?php
        // Inserta el pie de página desde un archivo externo
        require_once 'content_princi/footer.html';
    ?>


        

</body>
</html>
