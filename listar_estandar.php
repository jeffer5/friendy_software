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
    <th colspan="5" bgcolor=aquamarine>Lista estandares</th>
</tr>
<tr height=30>
<th>ID</th>
<th>PRODUCTO</th>
<th>PROCESO</th>
<th>CANTIDAD ESTANDAR</th>
<th>ESTANDAR EN MINUTOS</th>
</tr>

    <?php

        require_once 'conexion.php';

        $registro = mysqli_query($conex,'select*from promedio') or die ("error".mysqli_error($conex));


        while($reg = mysqli_fetch_array($registro)){

            echo '<tr>';
            echo '<th>'.$reg['id_pro'].'</th>';
            echo '<th>'.$reg['pro_pro'].'</th>'; 
            echo '<th>'.$reg['act_pro'].'</th>';
            echo '<th>'.$reg['can_pro'].'</th>';
            echo '<th>'.$reg['tie_pro'].'</th>';
            echo '</tr>';


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