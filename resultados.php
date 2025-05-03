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

        <section class="section">
            <button id=button><a href="eficiencias_com.php">Eficiencias Totales</a></button>
        </section>

        <section class="section-1">

            <div class="princi">

            <form action="eficiencias_espe.php">

                <div class="tittle"><p>Eficiencias por operario</p></div>

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
                <div class="selec">
                <input type="reset" value=limpiar>
                </div>
            </form>
            </div>
        </section>


        <section class="fecha">
            <form action="eficiencia_fecha.php">
            <div class="tittle"><p>Eficiencias por fecha</p></div>

            <h3>Por favor ingrese el rango de fechas</h3>
            
            <div class="seleccion">
            <input type="date" name="fecha1">
            <input type="date" name="fecha2">
            <input type="submit" value="enviar" name="fec">
            </div>
            </form>
        </section>


        <section class="rango">
            <form action="eficiencia_rango.php">
            <div class="tittle"><p>Eficiencias por rango</p></div>

            <h3>Por favor ingrese el rango de eficiencias</h3>
            
            <div class="seleccion">
            <input type="number" name="rango1">
            <input type="number" name="rango2">
            <input type="submit" value="enviar" name="fec">
            </div>
            </form>
        </section>
        

        <section class="proceso">
            <form action="eficiencia_proceso.php">
            <div class="tittle"><p>Eficiencias por proceso</p></div>

            <h3>Por favor ingrese el proceso</h3>
            
            <div class="seleccion">
            <input type="text" name="proceso">
            <input type="submit" value="enviar" name="pro">
            </div>
            </form>
        </section>


        <section class="orden">
            <form action="eficiencia_orden.php">
            <div class="tittle"><p>Eficiencias por orden</p></div>

            <h3>Por favor ingrese el número de la orden</h3>
            
            <div class="seleccion">
            <input type="number" name="orden">
            <input type="submit" value="enviar" name="ord">
            </div>
            </form>
        </section>




        <button id="volver"><a href="supervisor.php">volver</a></button>

    <?php
         
        require_once 'content_princi/footer.html'; 
    ?>
    
</body>
</html>