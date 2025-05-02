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



          $regia = mysqli_query($conex, "select*from eficiencia WHERE tot_efi BETWEEN '$_REQUEST[rango1] ' AND '$_REQUEST[rango2] ' ")or die ("error".mysqli_error($conex));


            echo "<center><table border=1>" ;
            echo "<tr><th colspan=3>Eficienicas por rango</th></tr>" ;
            echo "<tr><th>id eficiencia</th><th>id indicador</th><th>eficiencia</th></tr>" ;
            while($reg = mysqli_fetch_array($regia)){

            echo "<tr><th>".$reg['id_efi']."</th><th>".$reg['id_ind_fk']."</th><th>".$reg['tot_efi']."</th></tr>" ;
               
               
                
            }

            echo "</table>";

 ?>

    <button id="volver"><a href="resultados.php">volver</a></button>

    <?php   
    require_once 'content_princi/footer.html';  
    ?>



</body>
</html>
