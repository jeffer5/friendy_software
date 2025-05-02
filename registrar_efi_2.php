<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_reg.css"> <!-- Enlace a la hoja de estilos CSS -->
    <title>Document</title>
</head>
<body>
    
    <?php

        // Se incluye el encabezado común a todas las páginas (header_2.html).
        require_once 'content_princi/header_2.html'; 

        // Conexión a la base de datos.
        require_once 'conexion.php';

        // Se inserta un nuevo registro en la tabla 'indicador' usando los datos enviados por el formulario.
        // $_REQUEST recoge los datos enviados por GET o POST (en este caso, POST).
        mysqli_query ($conex, "insert into indicador(can_rea,tie_gas,fec_ind,id_det_fk,id_pro_fk) values
        ('$_REQUEST[cantidad]','$_REQUEST[tiempo]','$_REQUEST[fecha]','$_REQUEST[orden]','$_REQUEST[estandar]')")
        or die ("error".mysqli_error($conex)); // Si hay un error en la inserción, se muestra un mensaje de error.

        // Mensaje de éxito que indica que los datos fueron insertados correctamente.
        echo '<center><h2 id="datos">Datos agregados correctamente</h2>';
        

        $registro = mysqli_query($conex,"SELECT i.id_ind, i.can_rea, i.tie_gas, i.fec_ind , p.id_pro, p.act_pro, p.pro_pro, p.can_pro, p.tie_pro,d.id_det ,d.id_usu_fk, d.id_ord_fk,
        u.id_usu, u.nom_usu, u.ape_usu, o.id_ord, o.nro_ord, o.nom_pro, o.can_tot, pro_ord
                                                FROM indicador i
                                                JOIN promedio p ON i.id_pro_fk = p.id_pro
                                                JOIN detalle_orden d ON i.id_pro_fk = d.id_det
                                                JOIN usuario u ON d.id_usu_fk = u.id_usu
                                                JOIN orden o ON d.id_ord_fk = o.id_ord
                                                    ")or die ("error".mysqli_error($conex));


        $datos = [];

        while ($reg = mysqli_fetch_assoc($registro)){

        $datos[$reg['id_ind']] = $reg;

        $id_ind = $reg['id_ind'];


        }

        foreach ($datos as $item) {
        if ($item['nom_pro'] == $item['pro_pro'] && $item['pro_ord'] == $item['act_pro']) {

        $estandarMinuto = $item['can_pro'] / $item['tie_pro'];
        $realMinuto = $item['can_rea'] / $item['tie_gas'];

        $estandarMinuto = round($estandarMinuto, 2);
        $realMinuto = round($realMinuto, 2);

        $tot_efi =  ($realMinuto / $estandarMinuto)*100;
        $tot_efi = round($tot_efi, 2);


        $id_indi = $item['id_ind'];


        $existe = mysqli_query($conex, "SELECT 1 FROM eficiencia WHERE id_ind_fk = '$id_indi' LIMIT 1");

        if (mysqli_num_rows($existe) == 0) {
        // Solo insertar si no existe
        $regi = mysqli_query($conex, "INSERT INTO eficiencia(id_ind_fk, tot_efi) VALUES ('$id_indi','$tot_efi')") 
        or die ("error".mysqli_error($conex));
        }


        } else {
        echo "El estándar no corresponde con la orden para ID Indicador: " . $item['id_ind'] . "<br><br>";
        }
        }


        // Se cierra la conexión a la base de datos.
        mysqli_close($conex);
    ?>

    <!-- Botones para la navegación después de insertar los datos -->
    <button id="volver"><a href="listar_eficiencia.php">Ver lista</a></button> <!-- Enlace para ver la lista de registros -->
    <button id="volver-1"><a href="operario.php">volver</a></button> <!-- Enlace para regresar a la página principal del operario -->

    <?php   
        // Se incluye el pie de página común a todas las páginas (footer.html).
        require_once 'content_princi/footer.html';   
    ?>


</body>
</html>
