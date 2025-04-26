<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Configuraciones básicas del documento HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a hoja de estilos CSS específica para el formulario de registro -->
    <link rel="stylesheet" href="styles/styles_reg.css">
    <title>Document</title>
</head>
<body>

    
        <?php
        // Se obtiene la contraseña enviada por el formulario
        $contrasena = $_REQUEST['pass'];

        // Se aplica un hash a la contraseña utilizando el algoritmo por defecto de PHP
        $hash = password_hash("$contrasena", PASSWORD_DEFAULT);   

        // Se incluye el encabezado HTML común desde un archivo externo
        require_once 'content_princi/header_2.html';

        // Se establece la conexión a la base de datos desde un archivo externo
        require_once 'conexion.php';


        //adicionar un archivo de cualquier tipo
        // Se mueve el archivo subido (la foto del usuario) a la carpeta 'img' del servidor
        // El nombre del archivo se conserva tal como fue cargado
        move_uploaded_file($_FILES['foto']['tmp_name'],'img/'.$_FILES['foto']['name']);

        // Se guarda la ruta del archivo para insertarla luego en la base de datos
        $nomf = 'img/'.$_FILES['foto']['name'];

            //insertar registro de la tabla
            // Se ejecuta una consulta SQL para insertar los datos del formulario en la tabla 'usuario'
        mysqli_query ($conex, "insert into usuario(nom_usu,ape_usu,tdo_usu,ndo_usu,tel_usu,usu_usu,pass_usu,rol_usu,fot_usu) values
        ('$_REQUEST[nom]','$_REQUEST[apel]','$_REQUEST[tdo]','$_REQUEST[doc]','$_REQUEST[tele]','$_REQUEST[usua]','$hash','$_REQUEST[rol]','$nomf')")
        or die ("error".mysqli_error($conex));


              // Si la inserción fue exitosa, se muestra un mensaje de confirmación en pantalla
        echo '<center><h2 id="datos">Datos agregados correctamente</h2>';

        // Se cierra la conexión con la base de datos
        mysqli_close($conex);
    ?>

    <!-- Botón que redirige a la página principal -->
    <button id="volver"><a href="princi.php">volver</a></button>

    <?php
        // Se incluye el pie de página desde un archivo externo
        require_once 'content_princi/footer.html';
    ?>
</body>
</html>
