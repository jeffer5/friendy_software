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
        require_once 'princi.html';

    ?>
    
<center><table id="table" border=1 width=80%>

<tr height=30>
    <th colspan="6" bgcolor=aquamarine>Lista de ordenes acondicionamiento</th>
</tr>
<tr height=30>
<th>ID</th>
<th>NUMERO ORDEN</th>
<th>NOMBRE CLIENTE</th>
<th>FECHA ENTREGA</th>
<th>NOMBRE PRODUCTO</th>
<th>CANTIDAD TOTAL</th>
</tr>

    <?php

        require_once 'conexion.php';

        $registro = mysqli_query($conex,'select*from orden') or die ("error".mysqli_error($conex));


        while($reg = mysqli_fetch_array($registro)){

            echo '<tr>';
            echo '<th>'.$reg['id_ord'].'</th>';
            echo '<th>'.$reg['nro_ord'].'</th>'; 
            echo '<th>'.$reg['nom_cli'].'</th>';
            echo '<th>'.$reg['fec_ent'].'</th>';
            echo '<th>'.$reg['nom_pro'].'</th>';
            echo '<th>'.$reg['can_tot'].'</th>';
            echo '</tr>';


        }

        mysqli_close($conex);
    ?>

    </table>

    <button id="volver"><a href="supervisor.php">volver</a></button>

</body>
</html>