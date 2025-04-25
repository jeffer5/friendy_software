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
        require_once 'content_princi/header_2.html';  

    ?>
    
    <center><table id="table" border=1 width=80%>

    <tr height=30>
        <th colspan="7" bgcolor=aquamarine>Lista estandares</th>
    </tr>
    <tr height=30>
    <th>ID</th>
    <th>PRODUCTO</th>
    <th>PROCESO</th>
    <th>ESTANDAR POR MINUTO</th>
    
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
            echo "</tr>";


        }

    ?>

    <?php
        

        require_once 'conexion.php';


        $registro = mysqli_query($conex, "select*from promedio where id_pro = '$_REQUEST[cod1]' ") or die ("error".mysqli_error($conex));


        while ($reg = mysqli_fetch_array($registro)){

            $id_pro = $reg['id_pro'];
            $pro_pro = $reg['pro_pro']; 
            $act_pro = $reg['act_pro'];
            $can_pro = $reg['can_pro'];
     
    
            echo '<form action=actualizar_estandar_2.php  method=post  >';
            echo '<center><table border=1 width=30% >';
            echo '<tr><th colspan=2 bgcolor=aquamarine>Actualización de estadares</th></tr>';
            echo '<input type=hidden  name=id_pro value='.$id_pro.'></label><br><br>';
            echo '<tr><th rowspan=2><label >Producto<br><input type=text  name=producto value='.$pro_pro.'><input type=hidden  name=productoi value='.$pro_pro.'></label><br><br>';
            echo '<label>Proceso<br><input type=text name=proceso value='.$act_pro.'><input type=hidden name=procesoi value='.$act_pro.'></label><br><br>';
            echo '<label>Estandar por minuto<br><input type=text name=estandar value='.$can_pro.'><input type=hidden name=estandari value='.$can_pro.'></label><br><br>';
            echo '<center><input type=submit name=actualizarD value="Actualizar estandar"></th>';
            echo '</table>';
            echo '</form>';
    
        }
    
    
        mysqli_close($conex);
        ?>

        <button id="volver"><a href="supervisor.php">volver</a></button>

        <?php
        require_once 'content_princi/footer.html';

        ?>

</body>
</html>