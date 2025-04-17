<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_supe.css">
    <title>Document</title>
</head>
<body>
        <?php

            require_once 'princi.html';
            require_once 'conexion.php';

            session_start();

            $usu = $_SESSION['usuario'];




            $registro = mysqli_query($conex,"select * from usuario where usu_usu ='$usu' ") or die ("error".mysqli_error($conex));

            //invocar arrlego
            while ($reg = mysqli_fetch_array($registro)) {
                $id = $reg['id_usu'];
                $nom_usu = $reg['nom_usu']; 
                $ape_usu = $reg['ape_usu'];

            }//cierre while

            function saludar($nom_usu,$ape_usu){

                echo "<div class='mensaje-exito'>¡Bienvenid@ $nom_usu  $ape_usu!</div>";
            }

            saludar($nom_usu,$ape_usu);

        ?>

            <select name="crud" id="select-crud" onchange="campos(this.value)">
                <option value="">Escoja</option>
                <option value="Consultar">Consultar</option>
                <option value="Listar">Listar</option>
                <option value="Actualizar">Actualizar</option>
                <option value="Eliminar">Eliminar</option>
            </select>


            <div id="Consultar" style="display:none;">

                <div id="descripcion" >
                    <p>Seleccione por medio del numero de documento la información de registro de un usuario</p>
                </div>

                <div id="form-con">
                    <form action="consultar.php" method="post">
                        ingrese el documento a consultar <br><br>
                        <input type="number" name="cod" required>
                        <input type="submit" value="Consultar" name="consu" id="consu">
                    </form>
                </div>

            </div>
            <div id="Listar" style="display:none;">

                <div id="descripcion">
                    <p>Lista completa de los usuarios registrados en la aplicación</p>
                </div>
                    
                <div>
                    <button id="button-listar"><a href="listar.php">Listar</a></button>  
                </div>
                
            </div>
            <div id="Actualizar" style="display:none;">

           
                <div id="descripcion" >
                    <p>Actualiza registros segun el numero de documento del usuario</p>
                </div>
                    
                <div id="form-con">
                    <form action="actualizar.php" method="post">
                        ingrese el documento a actualizar <br><br>
                        <input type="number" name="cod1" required>
                        <input type="submit" value="Actualizar" name="consu" id="consu">
                    </form>
                </div>


            </div>
                 
            
            <div id="Eliminar" style="display:none;">

                <div id="descripcion" >
                    <p>Elimina registros segun el id del usuario</p>
                </div>
                    
                <div id="form-con">
                    <form action="eliminar.php" method="post">
                        ingrese el documento a eliminar <br><br>
                        <input type="number" name="cod2" required>
                        <input type="submit" value="Eliminar" name="consu" id="consu">
                    </form>
                </div>
                   
            </div>



            <script src="javascript/funciones.js"></script>

            <br><br><button id="salir"><a href="cerrar_sesion.php">cerrar sesion</a></button>
            
</body>
</html>