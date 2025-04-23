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

        $respuesta = mysqli_query($conex," SELECT d.id_det , u.nom_usu, o.nro_ord, c.nom_cli , e.fec_ent, p.nom_pro, t.can_tot
                                           FROM detalle_orden d
                                           JOIN usuario u ON d.id_usu_fk = u.id_usu
                                           JOIN orden o ON d.id_ord_fk = o.id_ord
                                           JOIN orden c ON d.id_ord_fk = c.id_ord
                                           JOIN orden e ON d.id_ord_fk = e.id_ord
                                           JOIN orden p ON d.id_ord_fk = p.id_ord
                                           JOIN orden t ON d.id_ord_fk = t.id_ord
                                           WHERE u.id_usu = '$_REQUEST[cod]'")or die("error".mysqli_error($conex));


   

    echo '<center><table id=table border=1>';
    echo "<tr> <th colspan=7 bgcolor=aquamarine> ordenes </th> </tr>";
    echo "<tr> <th>ID Detalle</th><th>Nombre Usuario</th><th>Número Orden</th><th>Nombre cliente</th><th>Fecha entrega</th><th>Nombre producto</th><th>Cantidad total</th> </tr>";
    while ($reg = mysqli_fetch_array($respuesta)){

        echo "<tr> <th>" . $reg["id_det"] ."</th><th>" . $reg["nom_usu"] . "</th><th>" . $reg["nro_ord"] . "</th>";
        echo " <th>" . $reg["nom_cli"] ."</th><th>" . $reg["fec_ent"] . "</th><th>" . $reg["nom_pro"] . "</th><th>" . $reg["can_tot"] . "</th> </tr>";
    }

    echo '</table>';


    ?>

        <button id="volver"><a href="operario.php">volver</a></button>


</body>
</html>