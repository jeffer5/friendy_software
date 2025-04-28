<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_resul.css">
    <title>Document</title>
</head>
<body>

    <?php
        require_once 'conexion.php';
        require_once 'content_princi/header_2.html';

    ?>


        <button id=button><a href="eficiencias_com.php">Eficiencias Totales</a></button>


        <section class="section">

            <div class="princi">

            <form action="eficiencias_espe.php">

                <div id="tittle"><p>Eficiencias por operario</p></div>

                    <h3>escoga la forma de busqueda de su preferencia</h3>
                <div class="seleccion">
                    <p>ingrese el numero documento del operario </p>
                    <input type="number" name="docu">
                    <input type="submit" value="enviar" name="nro_doc">
                </div>
                <div class="seleccion">
                    <p>ingrese el nombre de usuario del operario</p>
                    <input type="text" name="usu" >
                    <input type="submit" value="enviar" name="usu_usu">
                </div>
                <div class="seleccion">
                    <p>ingrese el id del operario</p>
                    <input type="text" name="cod">
                    <input type="submit" value="enviar" name="id_usu">
                </div>

            </form>
            </div>
        </section>


        <section class="otros">



        </section>



        <button id="volver"><a href="supervisor.php">volver</a></button>

    <?php
         
        require_once 'content_princi/footer.html'; 
    ?>
    
</body>
</html>