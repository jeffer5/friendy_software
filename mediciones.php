<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    // Conexión a la base de datos
    require_once 'conexion.php';

    // Realiza una consulta SQL para obtener los registros necesarios de varias tablas
    $registro = mysqli_query($conex, "
        SELECT 
            i.id_ind, i.can_rea, i.tie_gas, i.fec_ind, 
            p.id_pro, p.act_pro, p.pro_pro, p.can_pro, p.tie_pro,
            d.id_det, d.id_usu_fk, d.id_ord_fk, 
            u.id_usu, u.nom_usu, u.ape_usu, 
            o.id_ord, o.nro_ord, o.nom_pro, o.can_tot, pro_ord
        FROM indicador i
        JOIN promedio p ON i.id_pro_fk = p.id_pro
        JOIN detalle_orden d ON i.id_pro_fk = d.id_det
        JOIN usuario u ON d.id_usu_fk = u.id_usu
        JOIN orden o ON d.id_ord_fk = o.id_ord
    ") or die ("Error en la consulta: " . mysqli_error($conex));

    // Array para almacenar los datos de la consulta
    $datos = [];

    // Itera a través de los registros obtenidos
    while ($reg = mysqli_fetch_assoc($registro)) {
        // Almacena los resultados en el array usando el 'id_ind' como clave
        $datos[$reg['id_ind']] = $reg;

        // Variables de las tablas (estos valores se pueden usar posteriormente si es necesario)
        $reg['id_ind'];    // ID del indicador
        $reg['can_rea'];   // Cantidad realizada
        $reg['tie_gas'];   // Tiempo de gasto
        $reg['fec_ind'];   // Fecha del indicador

        $reg['id_usu'];    // ID del usuario
        $reg['nom_usu'];   // Nombre del usuario
        $reg['ape_usu'];   // Apellido del usuario

        $reg['id_ord'];    // ID de la orden
        $reg['nro_ord'];   // Número de orden
        $reg['nom_pro'];   // Nombre del producto
        $reg['can_tot'];   // Cantidad total
        $reg['pro_ord'];   // Proceso de la orden

        $reg['id_pro'];    // ID del promedio
        $reg['act_pro'];   // Actividad del proceso
        $reg['pro_pro'];   // Proceso del producto
        $reg['can_pro'];   // Cantidad estándar del proceso
        $reg['tie_pro'];   // Tiempo estándar del proceso
    }

    // Mostrar los datos obtenidos
    echo "<pre>";
    print_r($datos);  // Muestra los datos en formato legible para depuración
    echo "</pre>";

    $i = 0;

    // Tabla HTML para mostrar las eficiencias
    echo "<table border=1 >";
    echo "<tr><th colspan=7>Eficiencias totales</th></tr>";
    echo "<tr><th>ID Indicador</th><th>Numero Orden</th><th>Usuario</th><th>Producto</th><th>Cantidad realizada</th><th>Cantidad total</th><th>Eficiencia</th></tr>";

    // Itera sobre el array de datos
    foreach ($datos as $item) {
        // Verifica si el producto y el proceso corresponden a la orden
        if ($item['nom_pro'] == $item['pro_pro'] && $item['pro_ord'] == $item['act_pro']) {

            // Calcula la eficiencia estándar en minutos
            $estandarMinuto = $item['can_pro'] / $item['tie_pro'];
            // Calcula la eficiencia real en minutos
            $realMinuto = $item['can_rea'] / $item['tie_gas'];

            // Redondea las eficiencias a dos decimales
            $estandarMinuto = round($estandarMinuto, 2);
            $realMinuto = round($realMinuto, 2);

            // Calcula la eficiencia total en porcentaje
            $tot_efi = ($realMinuto / $estandarMinuto) * 100;
            $tot_efi = round($tot_efi, 2);

            // Muestra los resultados en la tabla
            echo "<tr><th>" . $item['id_ind'] . "</th><th>" . $item['nro_ord'] . "</th><th>" . $item['nom_usu'] . "</th><th>" . $item['nom_pro'] . "</th>";
            echo "<th>" . $item['can_rea'] . "</th><th>" . $item['can_tot'] . "</th><th>" . $tot_efi . " % </th></tr>";
        
        } else {
            // Si los estándares no corresponden con la orden, muestra un mensaje
            echo "El estándar no corresponde con la orden para ID Indicador: " . $item['id_ind'] . "<br><br>";
        }
    }

    echo "</table>";
?>

</body>
</html>
