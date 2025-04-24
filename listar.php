<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_lis.css">
    <title>Document</title>
</head>
<body>

    <?php
        require_once 'content_princi/header_2.html';  

    ?>
    
<center><table id="table" border=1 width=80%>

<tr height=30>
    <th colspan="10" bgcolor=aquamarine>Lista de usuarios</th>
</tr>
<tr height=30>
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

        require_once 'conexion.php';

        $registro = mysqli_query($conex,'select*from usuario') or die ("error".mysqli_error($conex));


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
            $ff = $reg['fot_usu'];
            echo "<th><img src=\"$ff\" width=120 height=120></th>
                </tr>";


        }

        mysqli_close($conex);
    ?>

    </table>

    <button id="volver"><a href="supervisor.php">volver</a></button>

    <?php
        require_once 'content_princi/footer.html';  

    ?>

</body>
</html>