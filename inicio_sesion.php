<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_ini.css">
    <title>Document</title>
</head>
<body>

   <?php
        require_once 'princi.html';

   ?>
    
    <form action="inicio_sesion_1.php" method="post" >
        <div id="inicio_sesion">

            <a href="princi.html"><img id="x" src="img/equis.jpg" alt=""></a><br><br>

            usuario <input type="text" name="usu" id="usu" required><br><br>

            Contraseña <input type="password" name="pas" id="pas" required><br><br><br>

            <input type="submit" name="ing" id="ing" value="ingresar">
            <input type="reset" name="lim" id="limpi" value="limpiar"><br><br>

            <a id="olv" href="">Olvide mi Contraseña</a> <a id="reg" href="registro.php">Registrarme</a>

        </div>
    </form>
    
   

        

</body>
</html>