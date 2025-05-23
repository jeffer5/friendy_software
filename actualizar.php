<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_act.css">
    <title>Document</title>
</head>
<body>

    <?php
    require_once 'content_princi/header_2.html';  // Se incluye el encabezado

?>

<!-- Tabla que muestra todos los usuarios de la base de datos -->
<center><table id="table" border=1 width=80%>

<tr height=30>
    <th colspan="10" bgcolor=aquamarine>Lista de usuarios</th> <!-- Título de la tabla -->
</tr>
<tr height=30>
    <!-- Encabezados de cada columna -->
    <th>ID</th>
    <th>NOMBRE</th>
    <th>APELLIDO</th>
    <th>TIPO DOCUMENTO</th>
    <th>NUMERO DOCUMENTO</th>
    <th>TELEFONO</th>
    <th>USUARIO</th>
    <th>CONTRASENA</th>
    <th>ROL</th>
    <th>FOTO</th>
</tr>

<?php
    require_once 'conexion.php'; // Conexión a la base de datos

    // Se realiza una consulta para traer todos los usuarios
    $registro = mysqli_query($conex,'select*from usuario') or die ("error".mysqli_error($conex));

    // Se recorre cada usuario y se imprime en una fila de la tabla
    while($reg = mysqli_fetch_array($registro)){
        echo '<tr>';
        echo '<th>'.$reg['id_usu'].'</th>';
        echo '<th>'.$reg['nom_usu'].'</th>'; 
        echo '<th>'.$reg['ape_usu'].'</th>';
        echo '<th>'.$reg['tdo_usu'].'</th>';
        echo '<th>'.$reg['ndo_usu'].'</th>';
        echo '<th>'.$reg['tel_usu'].'</th>';
        echo '<th>'.$reg['usu_usu'].'</th>';
        echo '<th>'.$reg['pass_usu'].'</th>';
        echo '<th>'.$reg['rol_usu'].'</th>';
        $ff = $reg['fot_usu']; // Se guarda la ruta de la foto
        echo "<th><img src=\"$ff\" width=120 height=120></th>
            </tr>";
    }
?>
</table>

<?php
    require_once 'conexion.php'; // Se vuelve a incluir la conexión (aunque ya estaba incluida antes)

    // Se consulta el usuario específico cuyo número de documento se recibe por el parámetro 'cod1'
    $registro = mysqli_query($conex, "select*from usuario where ndo_usu = '$_REQUEST[cod1]' ") or die ("error".mysqli_error($conex));

    // Se recorren los datos obtenidos del usuario consultado
    while ($reg = mysqli_fetch_array($registro)){
        // Se guardan los datos en variables
        $id_usu = $reg['id_usu'];
        $nom_usu = $reg['nom_usu'];
        $ape_usu = $reg['ape_usu'];
        $tdo_usu = $reg['tdo_usu'];
        $ndo_usu = $reg['ndo_usu'];
        $tel_usu = $reg['tel_usu'];
        $usu_usu = $reg['usu_usu'];
        $rol_usu = $reg['rol_usu'];
        $ff = $reg['fot_usu'];

        // Se genera el formulario para actualizar datos del usuario
        echo '<form action=actualizar_2.php  method=post  >';
        echo '<center><table border=1 width=30% >';
        echo '<tr><th colspan=2 bgcolor=aquamarine>Actualización de datos</th></tr>';
        echo '<input type=hidden  name=id_usu value='.$id_usu.'></label><br><br>';
        echo '<tr><th rowspan=2><label >Nombre<br><input type=text  name=nombre value='.$nom_usu.'><input type=hidden  name=nombrei value='.$nom_usu.'></label><br><br>';
        echo '<label>Apellido<br><input type=text name=apellido value='.$ape_usu.'><input type=hidden name=apellidoi value='.$ape_usu.'></label><br><br>';
        echo '<label>Tio documento<br><input type=text name=tipo_doc value='.$tdo_usu.'><input type=hidden name=tipo_doci value='.$tdo_usu.'></label><br><br>';
        echo '<label>Numero documento<br><input type=text name=num_doc value='.$ndo_usu.'><input type=hidden name=num_doci value='.$ndo_usu.'></label><br><br>';
        echo '<label>Telefono<br><input type=text name=telefono value='.$tel_usu.'><input type=hidden name=telefonoi value='.$tel_usu.'></label><br><br>';
        echo '<label>Usuario<br><input type=text name=usuario value='.$usu_usu.'><input type=hidden name=telefonoi value='.$usu_usu.'></label><br><br>';
        echo '<label>Rol<br><input type=text name=rol value='.$rol_usu.'><input type=hidden name=telefonoi value='.$rol_usu.'></label><br><br>';
        echo '<center><input type=submit name=actualizarD value="Actualizar datos"></th>';
        echo "<th><img src=\"$ff\" width=120 height=120</th></tr>";
        echo '</table>';
        echo '</form>';
    }

    mysqli_close($conex); // Se cierra la conexión con la base de datos
?>

<!-- Botón para volver a la página de supervisor -->
<button id="volver"><a href="supervisor.php">volver</a></button>

<?php
    require_once 'content_princi/footer.html'; // Se incluye el pie de página
?>


</body>
</html>
