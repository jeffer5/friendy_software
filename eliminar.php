<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_elim.css">
    <title>Document</title>
</head>
<body>



    <?php

        require_once 'princi.html';     
        //conexion a la base de datos
        require_once 'conexion.php';

        //traer los reggistros de la tabla aprendiz
        $registro = mysqli_query($conex,"select*from usuario where ndo_usu = '$_REQUEST[cod2]' ") or die ("error".mysqli_error($conex));


        //eliminar los reggistros de la tabla aprendiz
        if(($reg = mysqli_fetch_array($registro))){

            mysqli_query($conex,"delete from usuario where ndo_usu = '$_REQUEST[cod2]' ") or die ("error".mysqli_error($conex));
            echo '<center><p id=datos>Datos borrados correctamente</p><br><br>';

        }
        else{
            echo '<center><p id=datos>No se encuentran registros</p><br><br>';
        }



        mysqli_close($conex);

    ?>

    <button id="volverl"><a href="listar.php">ver lista</a></button><br><br>
    <button id="volver"><a href="supervisor.php">volver</a></button>

</body>
</html>