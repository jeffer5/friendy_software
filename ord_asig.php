<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_ord_a.css">
    <title>Document</title>
</head>
<body>
    


    <?php

        require_once 'princi.html';
        require_once 'conexion.php';

        $respuesta = mysqli_query($conex," SELECT d.id_det , u.nom_usu, o.nro_ord
                                           FROM detalle_orden d
                                           JOIN usuario u ON d.id_usu_fk = u.id_usu
                                           JOIN orden o ON d.id_ord_fk = o.id_ord
                                           WHERE u.id_usu = '$_REQUEST[cod]'")or die("error".mysqli_error($conex));


   

    echo '<table id=table border=1>';
    echo "<tr> <th colspan=3 bgcolor=aquamarine> ordenes </th> </tr>";
    while ($reg = mysqli_fetch_array($respuesta)){

        
        echo "<tr> <th>ID Detalle</th><th>Nombre Usuario</th><th>Número Orden</th> </tr>";
        echo "<tr> <th>" . $reg["id_det"] ."</th><th>" . $reg["nom_usu"] . "</th><th>" . $reg["nro_ord"] . "</th> </tr>";

    }

    echo '</table>';


    ?>



</body>
</html>