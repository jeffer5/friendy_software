<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_con.css">
    <title>Document</title>
</head>
<body>

   <?php
   
        require_once 'content_princi/header_2.html';  
        require_once 'conexion.php';

        $registro = mysqli_query($conex,"select*from usuario where ndo_usu = '$_REQUEST[cod]' ") or die ("error".mysqli_error($conex));


        while ($reg = mysqli_fetch_array($registro)) {
            echo '<div class="consulta">';
            echo '<p id="ficha">ficha tecnica </p>';
            echo '<p id="pa">Usuario #  '.$reg['id_usu'].'</p>';
            echo '<p id="pa">Nombre:   '.$reg['nom_usu'].'</p>'; 
            echo '<p id="pa">Apellido:  '.$reg['ape_usu'].'</p>';
            echo '<p id="pa">Tipo de documento:  '.$reg['tdo_usu'].'</p>';
            echo '<p id="pa">Numero de documento:  '.$reg['ndo_usu'].'</p>';
            echo '<p id="pa">Telefono:  '.$reg['tel_usu'].'</p>';
            echo '<p id="pa">Usuario:  '.$reg['usu_usu'].'</p>';
            echo '<p id="pa">Contrasena:  '.$reg['pass_usu'].'</p>';
            echo '<p id="pa">Rol:  '.$reg['rol_usu'].'</p>';
            $ff = $reg['fot_usu'];
            echo "<p id='pa'>Foto: <img src=\"$ff\" width=120 height=120></p>";
            echo '</div>';
        }//cierre while



        mysqli_close($conex);
    ?>

        <button id="volver"><a href="supervisor.php">volver</a></button>


    <?php
    require_once 'content_princi/footer.html';
    ?>


</body>
</html>