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

    <form action="registrar_efi_2.php"  method="post" enctype="multipart/form-data">
        <div class="reg">

            <div id="formu">
                
            <a href="operario.php"><img id="x" src="img/equis.jpg" alt=""></a><br><br>

                <label for="" >
                    Cantidad realizada<input type="number" name="cantidad" id="can_rea" required>
                </label>
                <br><br><br>
                <label for="" >
                   Tiempo gastado en min<input type="number" name="tiempo" id="tie_gas" required>
                </label>
                <br><br><br>
                <label for="">

                <?php
                     require_once 'conexion.php';

                     $respuesta = mysqli_query($conex," SELECT d.id_det , u.nom_usu, o.nro_ord,o.fec_ent,o.nom_pro, o.can_tot, o.pro_ord
                                                        FROM detalle_orden d
                                                        JOIN usuario u ON d.id_usu_fk = u.id_usu
                                                        JOIN orden o ON d.id_ord_fk = o.id_ord
                                                        WHERE u.id_usu = '$_REQUEST[cod]'")or die("error".mysqli_error($conex));
             
             
             
             echo "Detalle orden<select name='orden'>";
             echo "<option value='#'>seleccione</option> ";
             while ($reg = mysqli_fetch_array($respuesta)) {
                echo "<option value='" . $reg['id_det'] . "'>" . $reg['id_det'] . "</option>";
                
                
             
             }

             echo "</select><br><br>";

           
                echo "Numero orden<input type=text value=".$reg['nro_ord']." disabled><br>";
                echo "Fecha entrega<input type=text value=".$reg['fec_ent']." disabled><br>";
                echo "Producto<input type=text value=".$reg['nom_pro']." disabled><br>";
                echo "Cantidad<input type=text value=".$reg['can_tot']." disabled><br>"; 
                echo "Proceso<input type=text value=".$reg['pro_ord']." disabled><br>";   
            
                ?>

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