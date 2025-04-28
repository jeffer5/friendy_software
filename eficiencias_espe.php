<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_res.css">
    <title>Document</title>
</head>
<body>
    

 <?php


    require_once 'content_princi/header_2.html';  
   
    require_once 'conexion.php';


    $registro = mysqli_query($conex,"SELECT i.id_ind, i.can_rea, i.tie_gas, i.fec_ind , p.id_pro, p.act_pro, p.pro_pro, p.can_pro, p.tie_pro,d.id_det ,d.id_usu_fk, d.id_ord_fk,
                                      u.id_usu, u.nom_usu, u.ape_usu,u.ndo_usu, o.id_ord, o.nro_ord, o.nom_pro, o.can_tot, pro_ord
                                     FROM indicador i
                                     JOIN promedio p ON i.id_pro_fk = p.id_pro
                                     JOIN detalle_orden d ON i.id_pro_fk = d.id_det
                                     JOIN usuario u ON d.id_usu_fk = u.id_usu
                                     JOIN orden o ON d.id_ord_fk = o.id_ord
                                     WHERE u.id_usu ='$_REQUEST[cod] 'OR u.ndo_usu ='$_REQUEST[docu]' OR u.nom_usu ='$_REQUEST[usu]' ")or die ("error".mysqli_error($conex));


    $datos = [];

    while ($reg = mysqli_fetch_assoc($registro)){

        $datos[$reg['id_ind']] = $reg;


        //variables tabla indicador
        $reg['id_ind'];
        $reg['can_rea'];
        $reg['tie_gas'];
        $reg['fec_ind'];

        //variables tabla usuario
        $reg['id_usu'];
        $reg['nom_usu'];
        $reg['ape_usu'];
       
        //variables tabla orden
        $reg['id_ord'];
        $reg['nro_ord'];
        $reg['nom_pro'];
        $reg['can_tot'];
        $reg['pro_ord'];
        
        //variables tabla promedio
        $reg['id_pro'];
        $reg['act_pro'];
        $reg['pro_pro'];
        $reg['can_pro'];
        $reg['tie_pro'];
        
    }

        /*echo "<pre>";
        print_r($datos);
        echo "</pre>";*/


                echo "<center><table border=1 id=table>";
                echo "<tr><th colspan=7 bgcolor=aquamarine>Eficiencias totales</th></tr>";
                echo "<tr><th>ID Indicador</th><th>Numero Orden</th><th>Usuario</th><th>Producto</th><th>Cantidad realizada</th><th>Cantidad total</th><th>Eficiencia</th></tr>";
        foreach ($datos as $item) {
            if ($item['nom_pro'] == $item['pro_pro'] && $item['pro_ord'] == $item['act_pro']) {
        
                $estandarMinuto = $item['can_pro'] / $item['tie_pro'];
                $realMinuto = $item['can_rea'] / $item['tie_gas'];
        
                $estandarMinuto = round($estandarMinuto, 2);
                $realMinuto = round($realMinuto, 2);

                $tot_efi =  ($realMinuto / $estandarMinuto)*100;
                $tot_efi = round($tot_efi, 2);
        
                
                echo "<tr><th>".$item['id_ind']."</th><th>".$item['nro_ord']."</th><th>".$item['nom_usu']."</th><th>".$item['nom_pro']."</th>";
                echo "<th>".$item['can_rea']."</th><th>".$item['can_tot']."</th><th>".$tot_efi." % </th></tr>";
                
        
            } else {
                echo "El estándar no corresponde con la orden para ID Indicador: " . $item['id_ind'] . "<br><br>";
            }
        }

            echo "</table>";
 ?>

    <button id="volver"><a href="resultados.php">volver</a></button>

    <?php   
    require_once 'content_princi/footer.html';  
    ?>



</body>
</html>