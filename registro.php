<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_reg.css">
    <title>Document</title>
</head>
<body>
    
    
    
        <?php   
        require_once 'content_princi/header_2.html';  
        ?>

   

    <form action="registro_2.php"  method="post" enctype="multipart/form-data">
        <div class="reg">

            <div id="formu">
                
            <a href="princi.php"><img id="x" src="img/equis.jpg" alt=""></a><br><br>

                <label for="" >
                    Nombre<input type="text" name="nom" id="name" required>
                </label>
                <br><br><br>
                <label for="" >
                    Apellido<input type="text" name="apel" id="ape" required>
                </label>
                <br><br><br>
                <label for="">
                    Tipo documento<select name="tdo" id="tid" required>
                        <option value="">Escoga</option>
                        <option value="CC">CC</option>
                        <option value="CE">CE</option>
                        <option value="TI">TI</option>
                        <option value="PT">PT</option>
                    </select>
                </label>
                <br><br><br>
                <label for="">
                    Numero documento<input type="number"  name="doc" id="ndoc" required>
                </label>
                <br><br><br>
                <label for="">
                    telefono<input type="number" name="tele" id="tel" required>
                </label>
                <br><br><br>
                <label for="">
                    Usuario<input type="text" name="usua" id="usua" required>
                </label>
                <br><br><br>
                <label for="">
                    contrasena<input type="password" name="pass" id="pass" required>
                </label>
                <br><br><br>
                <label for="">
                    Rol<select name="rol" id="rol" required>
                        <option value="">Escoga</option>
                        <option value="supervisor">Supervisor</option>
                        <option value="operario">Operario</option>
                    </select>
                <br><br><br>
                </label>
                <label for="">
                    <center>foto <input type="file" name="foto">
                </label>
                <br><br>
                <label for="" >
                    <input type="submit" value="cargar" id="carg"><input type="reset" value="limpiar" id="limp">
                </label>
                <br><br>
                <label for="">
                    <button id="button"><a href="princi.html">Volver</a></button>
                </label>
            </div>
        </div>
    </form>


    <?php   
        require_once 'content_princi/footer.html';  
    ?>
</body>
</html>