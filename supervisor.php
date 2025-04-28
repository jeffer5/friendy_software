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
            // Se incluye el archivo de cabecera y la conexión a la base de datos
            require_once 'content_princi/header_2.html';
            require_once 'conexion.php';

            // Se inicia la sesión para poder acceder a las variables de sesión
            session_start();

            // Se obtiene el nombre de usuario de la sesión
            $usu = $_SESSION['usuario'];

            // Se realiza una consulta para obtener los datos del usuario desde la base de datos
            $registro = mysqli_query($conex,"select * from usuario where usu_usu ='$usu' ") or die ("error".mysqli_error($conex));

            // Se extraen los datos del usuario de la base de datos
            while ($reg = mysqli_fetch_array($registro)) {
                $id = $reg['id_usu'];  // ID del usuario
                $nom_usu = $reg['nom_usu'];  // Nombre del usuario
                $ape_usu = $reg['ape_usu'];  // Apellido del usuario
            }// Fin del ciclo while

            // Función para saludar al usuario
            function saludar($nom_usu,$ape_usu){
                // Muestra un mensaje de bienvenida con el nombre y apellido del usuario
                echo "<div class='mensaje-exito'>¡Bienvenid@ $nom_usu  $ape_usu!</div>";
            }

            // Se llama a la función para mostrar el mensaje de bienvenida
            saludar($nom_usu,$ape_usu);
        ?>

        <!-- Sección de funciones de usuarios -->
        <div class='mensaje'><h2>Funciones de usuarios</h2></div>

        <!-- Menú desplegable para seleccionar una opción de CRUD para los usuarios -->
        <select name="crud" id="select-crud" onchange="campos(this.value)">
            <option value="">Escoja</option>
            <option value="Consultar">Consultar</option>
            <option value="Listar">Listar</option>
            <option value="Actualizar">Actualizar</option>
            <option value="Eliminar">Eliminar</option>
        </select>

        <!-- Sección para consultar información de un usuario por su número de documento -->
        <div id="Consultar" style="display:none;">
            <div id="descripcion" >
                <p>Seleccione por medio del numero de documento la información de registro de un usuario</p>
            </div>

            <div id="form-con">
                <!-- Formulario para consultar un usuario -->
                <form action="consultar.php" method="post">
                    ingrese el documento a consultar <br><br>
                    <input type="number" name="cod" required>
                    <input type="submit" value="Consultar" name="consu" id="consu">
                </form>
            </div>

        </div>

        <!-- Sección para listar todos los usuarios registrados -->
        <div id="Listar" style="display:none;">

            <div id="descripcion">
                <p>Lista completa de los usuarios registrados en la aplicación</p>
            </div>
                    
            <div>
                <!-- Botón que redirige a la página de listado de usuarios -->
                <button id="button-listar"><a href="listar.php">Listar</a></button>  
            </div>
                
        </div>

        <!-- Sección para actualizar un usuario por su número de documento -->
        <div id="Actualizar" style="display:none;">

            <div id="descripcion" >
                <p>Actualiza registros segun el numero de documento del usuario</p>
            </div>
                    
            <div id="form-con">
                <!-- Formulario para actualizar un usuario -->
                <form action="actualizar.php" method="post">
                    ingrese el documento a actualizar <br><br>
                    <input type="number" name="cod1" required>
                    <input type="submit" value="Actualizar" name="consu" id="consu">
                </form>
            </div>
        </div>
                 
        <!-- Sección para eliminar un usuario por su número de documento -->
        <div id="Eliminar" style="display:none;">

            <div id="descripcion" >
                <p>Elimina registros segun el id del usuario</p>
            </div>
                    
            <div id="form-con">
                <!-- Formulario para eliminar un usuario -->
                <form action="eliminar.php" method="post">
                    ingrese el documento a eliminar <br><br>
                    <input type="number" name="cod2" required>
                    <input type="submit" value="Eliminar" name="consu" id="consu">
                </form>
            </div>
                   
        </div>

        <br><div class='mensaje'><h2>Funciones ordenes</h2></div>

        <!-- Menú desplegable para seleccionar una opción de CRUD para las órdenes -->
        <select name="crud" id="select-crud" onchange="camposu(this.value)">
            <option value="">Escoja</option>
            <option value="registrar_orden">Registrar orden</option>
            <option value="listar_orden">Listar ordenes</option>
            <option value="actualizar_orden">Actualizar orden</option>
            <option value="eliminar_orden">Eliminar orden</option>
        </select>

        <!-- Sección para registrar una nueva orden -->
        <div id="registrar_orden" style="display:none;">

            <div id="descripcion" >
                <p>Registre los datos necesarios en la orden de acondicionamiento</p>
            </div>

            <div id="form-con">
                <!-- Botón que redirige a la página para registrar una orden -->
                <button id="button-listar"><a href="registrar_orden.php">Registrar</a></button> 
            </div>

        </div>

        <!-- Sección para listar todas las órdenes registradas -->
        <div id="listar_orden" style="display:none;">

            <div id="descripcion">
                <p>Lista completa de las ordenes de acondicionamiento</p>
            </div>
                    
            <div>
                <!-- Botón que redirige a la página para listar las órdenes -->
                <button id="button-listar"><a href="listar_orden.php">Listar</a></button>  
            </div>
                
        </div>

        <!-- Sección para actualizar una orden por su número -->
        <div id="actualizar_orden" style="display:none;">

            <div id="descripcion" >
                <p>Actualiza registros segun el numero de la orden de acondicionamiento</p>
            </div>
                    
            <div id="form-con">
                <!-- Formulario para actualizar una orden -->
                <form action="actualizar_orden.php" method="post">
                    ingrese el numero a actualizar <br><br>
                    <input type="number" name="cod1" required>
                    <input type="submit" value="Actualizar" name="consu" id="consu">
                </form>
            </div>

        </div>
                 
        <!-- Sección para eliminar una orden por su número -->
        <div id="eliminar_orden" style="display:none;">

            <div id="descripcion" >
                <p>Elimina registros segun el numero de acondicioamiento</p>
            </div>
                    
            <div id="form-con">
                <!-- Formulario para eliminar una orden -->
                <form action="eliminar_orden.php" method="post">
                    ingrese el numero de orden a eliminar <br><br>
                    <input type="number" name="cod2" required>
                    <input type="submit" value="Eliminar" name="consu" id="consu">
                </form>
            </div>
                   
        </div>
            
            <section>
            <div class="steps"> 

                <div class="res">
                        <br><div class='mensaje-2'><h2>Asignar operario</h2></div>
                    <div>
                        <div id="descripcion-2" >
                            <p>Asignar un operario a una orden de acondicionamiento</p>
                        </div>
                        <button id="asignar"><a href="asignar.php">Asignar operario</a></button>  
                    </div>
                </div>

                <div class="res">
                    <br><div class='mensaje-2'><h2>Ver resultados</h2></div>

                    <div>
                        <div id="descripcion-2" >
                            <p>Consultar datos obtenidos por el programa</p>
                        </div>
                        <button id="asignar"><a href="resultados.php">Consultar</a></button>  
                    </div>
                </div> 
            </div>

            </section>


        <div>
            <br><div class='mensaje'><h2>Establecer estandares</h2></div>

            <!-- Menú desplegable para seleccionar una opción de CRUD para los estándares -->
            <select name="crud" id="select-crud" onchange="campose(this.value)">
                <option value="">Escoja</option>
                <option value="registrar_estandar">Registrar estandar</option>
                <option value="listar_estandar">Listar estandar</option>
                <option value="actualizar_estandar">Actualizar estandar</option>
                <option value="eliminar_estandar">Eliminar estandar</option>
            </select>

            <!-- Sección para registrar un nuevo estándar -->
            <div id="registrar_estandar" style="display:none;">

                <div id="descripcion" >
                    <p>Registre los estandares necesarios para el control de eficiencias</p>
                </div>

                <div id="form-con">
                    <!-- Botón que redirige a la página para registrar un estándar -->
                    <button id="button-listar"><a href="registrar_estandar.php">Registrar</a></button> 
                </div>

            </div>

            <!-- Sección para listar todos los estándares registrados -->
            <div id="listar_estandar" style="display:none;">

                <div id="descripcion">
                    <p>Lista completa de los estandares registrados</p>
                </div>
                    
                <div>
                    <!-- Botón que redirige a la página para listar los estándares -->
                    <button id="button-listar"><a href="listar_estandar.php">Listar</a></button>  
                </div>
                    
            </div>

            <!-- Sección para actualizar un estándar por su id -->
            <div id="actualizar_estandar" style="display:none;">

                <div id="descripcion" >
                    <p>Actualiza registros segun el id del estandar</p>
                </div>
                    
                <div id="form-con">
                    <!-- Formulario para actualizar un estándar -->
                    <form action="actualizar_estandar.php" method="post">
                        ingrese el id a actualizar <br><br>
                        <input type="number" name="cod1" required>
                        <input type="submit" value="Actualizar" name="consu" id="consu">
                    </form>
                </div>

            </div>
        </div>

        <!-- Sección para eliminar un estándar por su id -->
        <div id="eliminar_estandar" style="display:none;">

            <div id="descripcion" >
                <p>Elimina estandares segun el id</p>
            </div>
                    
            <div id="form-con">
                <!-- Formulario para eliminar un estándar -->
                <form action="eliminar_estandar.php" method="post">
                    ingrese el id eliminar <br><br>
                    <input type="number" name="cod2" required>
                    <input type="submit" value="Eliminar" name="consu" id="consu">
                </form>
            </div>
                   
        </div>
        

        <!-- Botón para cerrar sesión -->
        <br><br><button id="salir"><a href="cerrar_sesion.php">cerrar sesion</a></button>

    <?php
        // Se incluye el archivo de pie de página
        require_once 'content_princi/footer.html';
    ?>

    <script src="javascript/funciones.js"></script>

</body>
</html>
