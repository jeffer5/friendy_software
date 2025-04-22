<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_ord.css">
    <title>Document</title>
</head>
<body>
    
    <?php   

    
      require_once 'princi.html';

    ?>

    <form action="registrar_orden_2.php"  method="post" enctype="multipart/form-data">
        <div class="reg">

            <div id="formu">
                
            <a href="supervisor.php"><img id="x" src="img/equis.jpg" alt=""></a><br><br>

                <label for="" >
                    Numero orden<input type="number" name="numord" id="num_ord" required>
                </label>
                <br><br><br>
                <label for="" >
                    Nombre cliente<input type="text" name="nomcli" id="nom_cli" required>
                </label>
                <br><br><br>
                <label for="">
                    Fecha de entrega<input type="date"  name="fecent" id="fec_ent" required>
                </label>
                <br><br><br>
                <label for="">
                    Nombre del producto<input type="text" name="nompro" id="nom_pro" required>
                </label>
                <br><br><br>
                <label for="">
                    Cantidad total<input type="number" name="cantot" id="can_tot" required>
                </label>
                <br><br><br>
                <label for="" >
                    <input type="submit" value="cargar" id="carg"><input type="reset" value="limpiar" id="limp">
                </label>
                <br><br>
                <label for="">
                    <button id="button"><a href="supervisor.php">Volver</a></button>
                </label>
            </div>
        </div>
    </form>
</body>
</html>