<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    
        <?php
            //establecer conexion de php con mysql y seleccionar base de datos a  trabajar
            $conex = mysqli_connect('localhost','root','') or die ('mysql no se conecto');
            //echo 'mysql conectado<br><br>'; 

            //seleccionar la base de datos trabajada
            mysqli_select_db ($conex, 'bdfriendly') or die ('base de datos no encontrada');
            //echo 'la base de datos -bdsena- ha sido conectada<br><br>';

            /*desconectar mysql de php
            mysqli_close($conex);
            echo 'mysql se ha desconectado';*/
        ?>

</body>
</html>
