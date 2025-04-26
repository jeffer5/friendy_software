<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_efi.css">
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
             
             
             
             $datos = [];

             echo "Detalle orden<select name='orden' id='orden' onchange='llenarInputs()'>";
             echo "<option value=''>seleccione</option>";
             
             while ($reg = mysqli_fetch_array($respuesta)) {
                 $datos[$reg['id_det']] = $reg;
                 echo "<option value='" . $reg['id_det'] . "'>" . $reg['id_det'] . "</option>";
             }
             echo "</select><br><br>";
            
                ?>

                <div class="orden"> 
                Numero orden: <input type="text" id="nro_ord" disabled><br>
                Fecha entrega: <input type="text" id="fec_ent" disabled><br>
                Producto: <input type="text" id="nom_pro" disabled><br>
                Cantidad: <input type="text" id="can_tot" disabled><br>
                Proceso: <input type="text" id="pro_ord" disabled><br>
                </div>

                <script>
                    // esta constante datos permite guardar mis datos y enviarlos como un objeto a javascript
                    const datos = <?php echo json_encode($datos); ?>;
                </script>

                </label>
                <label for="">
            <?php
                   

                $registro = mysqli_query($conex,"select*from promedio")or die("error".mysqli_error($conex));
             
             
             
             $dat = [];

             echo "<br>Estandar<select name='estandar' id='estandar' onchange='llenarInputsp()'>";
             echo "<option value=''>seleccione</option>";
             
             while ($reg = mysqli_fetch_array($registro)) {
                 $dat[$reg['id_pro']] = $reg;
                 echo "<option value='" . $reg['id_pro'] . "'>" . $reg['id_pro'] . "</option>";
             }
             echo "</select><br><br>";
            
                ?>

                <div class="orden"> 
                Producto estandar: <input type="text" id="pro_pro" disabled><br>
                Proceso estandar: <input type="text" id="act_pro" disabled><br>
                </div>

                <script>
                    // esta constante datos permite guardar mis datos y enviarlos como un objeto a javascript
                    const dat = <?php echo json_encode($dat); ?>;
                </script>

                </label>
                <br><br>
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

        <script src="javascript/funciones.js"></script>

    <?php   
        require_once 'content_princi/footer.html';  
    ?>