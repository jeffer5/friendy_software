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

            require_once 'content_princi/header_2.html';
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

        <div class='mensaje'><h2>Funciones de usuarios</h2></div>

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


            <br><div class='mensaje'><h2>Funciones ordenes</h2></div>


            <select name="crud" id="select-crud" onchange="camposu(this.value)">
                <option value="">Escoja</option>
                <option value="registrar_orden">Registrar orden</option>
                <option value="listar_orden">Listar ordenes</option>
                <option value="actualizar_orden">Actualizar orden</option>
                <option value="eliminar_orden">Eliminar orden</option>
            </select>


            <div id="registrar_orden" style="display:none;">

                <div id="descripcion" >
                    <p>Registre los datos necesarios en la orden de acondicionamiento</p>
                </div>

                <div id="form-con">
                    <button id="button-listar"><a href="registrar_orden.php">Registrar</a></button> 
                </div>

            </div>


            <div id="listar_orden" style="display:none;">

                <div id="descripcion">
                    <p>Lista completa de las ordenes de acondicionamiento</p>
                </div>
                    
                <div>
                    <button id="button-listar"><a href="listar_orden.php">Listar</a></button>  
                </div>
                
            </div>


            <div id="actualizar_orden" style="display:none;">

                <div id="descripcion" >
                    <p>Actualiza registros segun el numero de la orden de acondicionamiento</p>
                </div>
                    
                <div id="form-con">
                    <form action="actualizar_orden.php" method="post">
                        ingrese el numero a actualizar <br><br>
                        <input type="number" name="cod1" required>
                        <input type="submit" value="Actualizar" name="consu" id="consu">
                    </form>
                </div>

            </div>
                 
            
            <div id="eliminar_orden" style="display:none;">

                <div id="descripcion" >
                    <p>Elimina registros segun el numero de acondicioamiento</p>
                </div>
                    
                <div id="form-con">
                    <form action="eliminar_orden.php" method="post">
                        ingrese el numero de orden a eliminar <br><br>
                        <input type="number" name="cod2" required>
                        <input type="submit" value="Eliminar" name="consu" id="consu">
                    </form>
                </div>
                   
            </div>


            <div class="operario">
                <br><div class='mensaje-1'><h2>Asignar operario</h2></div>

                <div>

                    <div id="descripcion-1" >
                        <p>Asignar un operario a una orden de acondicionamiento</p>
                    </div>
                    <button id="asignar"><a href="asignar.php">Asignar operario</a></button>  
                </div>
            </div>


            <div>
                <br><div class='mensaje'><h2>Establecer estandares</h2></div>


                <select name="crud" id="select-crud" onchange="campose(this.value)">
                    <option value="">Escoja</option>
                    <option value="registrar_estandar">Registrar estandar</option>
                    <option value="listar_estandar">Listar estandar</option>
                    <option value="actualizar_estandar">Actualizar estandar</option>
                    <option value="eliminar_estandar">Eliminar estandar</option>
                </select>


                <div id="registrar_estandar" style="display:none;">

                    <div id="descripcion" >
                        <p>Registre los estandares necesarios para el control de eficiencias</p>
                    </div>

                    <div id="form-con">
                        <button id="button-listar"><a href="registrar_estandar.php">Registrar</a></button> 
                    </div>

                </div>


                <div id="listar_estandar" style="display:none;">

                    <div id="descripcion">
                        <p>Lista completa de los estandares registrados</p>
                    </div>
                        
                    <div>
                        <button id="button-listar"><a href="listar_estandar.php">Listar</a></button>  
                    </div>
                    
                </div>


                <div id="actualizar_estandar" style="display:none;">

                    <div id="descripcion" >
                        <p>Actualiza registros segun el id del estandar</p>
                    </div>
                        
                    <div id="form-con">
                        <form action="actualizar_estandar.php" method="post">
                            ingrese el id a actualizar <br><br>
                            <input type="number" name="cod1" required>
                            <input type="submit" value="Actualizar" name="consu" id="consu">
                        </form>
                    </div>

                </div>
            </div>

            <div id="eliminar_estandar" style="display:none;">

                <div id="descripcion" >
                    <p>Elimina estandares segun el id</p>
                </div>
                    
                <div id="form-con">
                    <form action="eliminar_estandar.php" method="post">
                        ingrese el id eliminar <br><br>
                        <input type="number" name="cod2" required>
                        <input type="submit" value="Eliminar" name="consu" id="consu">
                    </form>
                </div>
                   
            </div>
            


            <script src="javascript/funciones.js"></script>

            <br><br><button id="salir"><a href="cerrar_sesion.php">cerrar sesion</a></button>

    <?php
    require_once 'content_princi/footer.html';
    ?>
</body>
</html>