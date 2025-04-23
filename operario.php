<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_ope.css">
    <title>Document</title>
</head>
<body>
    

    <?php

        require_once 'princi.html';
        require_once 'conexion.php';

        session_start();

        $usu = $_SESSION['usuario'];

  


        $registro = mysqli_query($conex,"select * from usuario where usu_usu ='$usu' ") or die ("error".mysqli_error($conex));

        //invocar arrlego
        while ($reg = mysqli_fetch_array($registro)) {
            $id = $reg['id_usu'];
            $nom_usu = $reg['nom_usu']; 
            $ape_usu = $reg['ape_usu'];
        
        }//cierre while

        function saludar($nom_usu,$ape_usu){

            echo "<div class='mensaje-exito'>¡Bienvenid@ $nom_usu  $ape_usu!</div>";
        }

        saludar($nom_usu,$ape_usu);

    ?>


        <div class='mensaje'><h2>ordenes asignadas</h2></div>

            <div id="descripcion" >
                <p>revise ordenes asignadas por el supervisor</p>
                <form action="ord_asig.php" method=post>
                    <input type="hidden" name="cod" <?php echo "value='$id'  " ?>  >
                    <input type="submit" value="revisar">
                </form>
            </div>





        <br><br><button id="salir"><a href="cerrar_sesion.php">cerrar sesion</a></button>

</body>
</html>