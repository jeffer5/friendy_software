<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_reg.css">
    <title>Document</title>
</head>
<body>
    
    <?php

        $contrasena = $_REQUEST['pass'];

        $hash = password_hash("$contrasena", PASSWORD_DEFAULT);   

            require_once 'content_princi/header_2.html';
            //conexion a la base de datos   
            require_once 'conexion.php';

            //adicionar un archivo de cualquier tipo
            move_uploaded_file($_FILES['foto']['tmp_name'],'img/'.$_FILES['foto']['name']);
            $nomf = 'img/'.$_FILES['foto']['name'];

            //insertar registro de la tabla
            mysqli_query ($conex, "insert into usuario(nom_usu,ape_usu,tdo_usu,ndo_usu,tel_usu,usu_usu,pass_usu,rol_usu,fot_usu) values
            ('$_REQUEST[nom]','$_REQUEST[apel]','$_REQUEST[tdo]','$_REQUEST[doc]','$_REQUEST[tele]','$_REQUEST[usua]','$hash','$_REQUEST[rol]','$nomf')")
            or die ("error".mysqli_error($conex));

            echo '<center><h2 id="datos">Datos agregados correctamente</h2>';
            
            mysqli_close($conex);
            
    ?>

        <button id="volver"><a href="princi.html">volver</a></button>

        <?php
        require_once 'content_princi/footer.html';
        ?>

</body>
</html>