<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_ope.css">
    <title>Document</title>
</head>
<body>
    

    <?php

        // Incluir archivo de encabezado
        require_once 'content_princi/header_2.html';  
        require_once 'conexion.php';

        // Iniciar la sesión para acceder a los datos del usuario
        session_start();

        // Obtener el nombre de usuario desde la sesión
        $usu = $_SESSION['usuario'];

        // Consulta para obtener los datos del usuario de la base de datos
        $registro = mysqli_query($conex,"select * from usuario where usu_usu ='$usu' ") or die ("error".mysqli_error($conex));

        // Asignar los valores del usuario a variables
        while ($reg = mysqli_fetch_array($registro)) {
            $id = $reg['id_usu'];
            $nom_usu = $reg['nom_usu']; 
            $ape_usu = $reg['ape_usu'];
        
        }//cierre while

        // Función para mostrar un mensaje de bienvenida
        function saludar($nom_usu,$ape_usu){
            echo "<div class='mensaje-exito'>¡Bienvenid@ $nom_usu  $ape_usu!</div>";
        }

        // Llamar a la función de saludo
        saludar($nom_usu,$ape_usu);

    ?>

    <!-- Funciones disponibles para el usuario -->
    <div class="funciones">
        <div class='mensaje'><h2>ordenes asignadas</h2></div>

        <div id="descripcion">
            <p>Revise las órdenes asignadas por su supervisor</p>
            <form action="ord_asig.php" method="post">
                <input type="hidden" name="cod" <?php echo "value='$id'"; ?> >
                <input id="revisar" type="submit" value="Revisar">
            </form>
        </div>
    </div>

    <!-- Registrar eficiencia -->
    <div class="funciones-1">
        <div class='mensaje-1'><h2>Registrar eficiencia</h2></div>

        <div id="descripcion-1">
            <p>Registre la información necesaria para la medición de eficiencia</p>
            <form action="registrar_efi.php" method="post">
                <input type="hidden" name="cod" <?php echo "value='$id'"; ?> >
                <input id="revisar" type="submit" value="Registrar">
            </form>
        </div>
    </div>

    <!-- Botón para cerrar sesión -->
    <br><br><button id="salir"><a href="cerrar_sesion.php">Cerrar sesión</a></button>

    <?php
    // Incluir archivo de pie de página
    require_once 'content_princi/footer.html';  
    ?>

</body>
</html>
