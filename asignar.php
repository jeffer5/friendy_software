<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a la hoja de estilos CSS -->
    <link rel="stylesheet" href="styles/styles_asi.css">
    <title>Document</title>
</head>
<body>
    
   <?php
    // Incluye el encabezado común de la página
    require_once 'content_princi/header_2.html';  
?>    


    <!-- Inicio de la tabla que muestra las órdenes de acondicionamiento -->
<center>
    <table id="table" border="1" width="80%">

        <!-- Encabezado de la tabla -->
        <tr height="30">
            <th colspan="7" bgcolor="aquamarine">Lista de órdenes acondicionamiento</th>
        </tr>
        
        <!-- Títulos de las columnas -->
        <tr height="30">
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

    // Consulta para obtener todas las órdenes
    $registro = mysqli_query($conex,'select * from orden') or die ("error".mysqli_error($conex));

    // Itera sobre cada fila obtenida de la base de datos
    while($reg = mysqli_fetch_array($registro)){
        // Muestra los datos de cada orden en una nueva fila de la tabla
        echo '<tr>';
        echo '<th>'.$reg['id_ord'].'</th>';
        echo '<th>'.$reg['nro_ord'].'</th>'; 
        echo '<th>'.$reg['nom_cli'].'</th>';
        echo '<th>'.$reg['fec_ent'].'</th>';
        echo '<th>'.$reg['nom_pro'].'</th>';
        echo '<th>'.$reg['can_tot'].'</th>';
        echo '<th>'.$reg['pro_ord'].'</th>';
        echo '</tr>';
    }
?>


    </table><br><br><br>


    <?php
    // Consulta para listar los operarios disponibles
    $registro = mysqli_query($conex,'select id_usu, nom_usu from usuario where rol_usu="operario"') or die ("error".mysqli_error($conex));

    // Formulario para asignar una orden a un operario
    echo '<form action=asignar_2.php method=post>';
    
    // Dropdown para seleccionar un operario
    echo "Seleccione operario<select name='usuario' id='usuario'>";
    echo "<option value='#'>Seleccione</option>";
    while ($row = mysqli_fetch_assoc($registro)) {
        echo "<option value='" . $row['id_usu'] . "'>" . $row['nom_usu'] . "</option>";
    }
    echo "</select>";
    
    // Consulta para listar las órdenes disponibles
    $registro = mysqli_query($conex,'select id_ord, nro_ord from orden') or die ("error".mysqli_error($conex));

    // menu desplegable para seleccionar una orden
    echo "Seleccione orden<select name='orden'>";
    echo "<option value='#'>Seleccione</option>";
    while ($row = mysqli_fetch_assoc($registro)) {
        echo "<option value='" . $row['id_ord'] . "'>" . $row['nro_ord'] . "</option>";
    }
    echo "</select><br><br>";

    // Botón para enviar el formulario
    echo '<input id="asignar" type="submit" value="Asignar"></form><br>';

    // Cierra la conexión a la base de datos
    mysqli_close($conex);
?>

<button id="volver"><a href="asignados.php">ver asignaciones</a></button>

   <!-- Botón para volver a la página de supervisor -->
<button id="volver"><a href="supervisor.php">volver</a></button>


   <?php
    // Incluye el pie de página común
    require_once 'content_princi/footer.html';
?>

    
</body>
</html>
