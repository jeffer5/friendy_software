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
    // Se incluye el encabezado de la página
    require_once 'content_princi/header_2.html';  
?>

<center>
    <!-- Tabla para mostrar la lista de órdenes -->
    <table id="table" border=1 width=80%>

        <!-- Fila de encabezado de la tabla -->
        <tr height=30>
            <th colspan="7" bgcolor=aquamarine>Lista de ordenes</th>
        </tr>

        <!-- Fila con los nombres de las columnas -->
        <tr height=30>
            <th>ID</th>
            <th>NUMERO ORDEN</th>
            <th>NOMBRE CLIENTE</th>
            <th>FECHA ENTREGA</th>
            <th>NOMBRE PRODUCTO</th>
            <th>CANTIDAD TOTAL</th>
            <th>PROCESO A REALIZAR</th>
        </tr>

<?php
    // Conexión a la base de datos
    require_once 'conexion.php';

    // Consulta a la tabla 'orden' para obtener todos los registros
    $registro = mysqli_query($conex,'select*from orden') or die ("error".mysqli_error($conex));

    // Iteración sobre cada registro para mostrarlos en la tabla
    while($reg = mysqli_fetch_array($registro)){
        echo '<tr>';
        echo '<th>'.$reg['id_ord'].'</th>';
        echo '<th>'.$reg['nro_ord'].'</th>'; 
        echo '<th>'.$reg['nom_cli'].'</th>';
        echo '<th>'.$reg['fec_ent'].'</th>';
        echo '<th>'.$reg['nom_pro'].'</th>';
        echo '<th>'.$reg['can_tot'].'</th>';
        echo '<th>'.$reg['pro_ord'].'</th>';
        echo "</tr>";
    }
?>

<?php
    // Obtener el registro específico de la orden basado en el número de orden proporcionado
    require_once 'conexion.php';
    $registro = mysqli_query($conex, "select*from orden where nro_ord = '$_REQUEST[cod1]' ") or die ("error".mysqli_error($conex));

    // Mostrar los datos de la orden seleccionada para actualizarlos
    while ($reg = mysqli_fetch_array($registro)){
        // Guardar los datos en variables
        $id_ord = $reg['id_ord'];
        $nro_ord = $reg['nro_ord']; 
        $nom_cli = $reg['nom_cli'];
        $fec_ent = $reg['fec_ent'];
        $nom_pro = $reg['nom_pro'];
        $can_tot = $reg['can_tot'];
        $pro_ord = $reg['pro_ord'];

        // Crear el formulario para actualizar los datos de la orden
        echo '<form action=actualizar_orden_2.php  method=post  >';
        echo '<center><table border=1 width=30% >';
        echo '<tr><th colspan=2 bgcolor=aquamarine>Actualización de datos</th></tr>';
        echo '<input type=hidden  name=id_ord value='.$id_ord.'></label><br><br>';
        echo '<tr><th rowspan=2><label >Nombre<br><input type=text  name=numero_orden value='.$nro_ord.'><input type=hidden  name=numero_ordeni value='.$nro_ord.'></label><br><br>';
        echo '<label>Apellido<br><input type=text name=nombre_cliente value='.$nom_cli.'><input type=hidden name=nombre_clientei value='.$nom_cli.'></label><br><br>';
        echo '<label>Tio documento<br><input type=text name=fecha_entrega value='.$fec_ent.'><input type=hidden name=fecha_entregai value='.$fec_ent.'></label><br><br>';
        echo '<label>Numero documento<br><input type=text name=nombre_producto value='.$nom_pro.'><input type=hidden name=nombre_productoi value='.$nom_pro.'></label><br><br>';
        echo '<label>Telefono<br><input type=text name=cantidad_tot value='.$can_tot.'><input type=hidden name=cantidad_toti value='.$can_tot.'></label><br><br>';
        echo '<label>Telefono<br><input type=text name=proceso_ord value='.$pro_ord.'><input type=hidden name=proceso_ordi value='.$pro_ord.'></label><br><br>';
        echo '<center><input type=submit name=actualizarD value="Actualizar datos"></th>';
        echo '</table>';
        echo '</form>';
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conex);
?>

<!-- Botón para volver a la página de supervisor -->
<button id="volver"><a href="supervisor.php">volver</a></button>

<?php
    // Incluir el pie de página
    require_once 'content_princi/footer.html';
?>

</body>
</html>
