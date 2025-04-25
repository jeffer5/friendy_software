<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_esta.css">
    <title>Document</title>
</head>
<body>
    
    <?php   
        require_once 'content_princi/header_2.html';   
    ?>

    <form action="registrar_estandar_2.php"  method="post" enctype="multipart/form-data">
        <div class="reg">

            <div id="formu">
                
            <a href="supervisor.php"><img id="x" src="img/equis.jpg" alt=""></a><br><br>

                <label for="" >
                    Producto<input type="text" name="pro" id="pro_pro" required>
                </label>
                <br><br><br>
                <label for="" >
                    proceso<input type="text" name="proceso" id="act_pro" required>
                </label>
                <br><br><br>
                <label for="">
                    Cantidad estandar<input type="number"  name="cantidad" id="can_pro" required>
                </label>
                <br><br><br>
                <label for="">
                    Estandar en minutos<input type="number"  name="tiempo" id="tie_pro" required>
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

    <?php   
        require_once 'content_princi/footer.html';  
    ?>



</body>
</html>