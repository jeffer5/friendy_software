<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a la hoja de estilos CSS para dar diseño a la página -->
    <link rel="stylesheet" href="styles/styles_ini.css">
    <title>Document</title>
</head>
<body>
    
<?php
    // Incluye el archivo que conecta con la base de datos
    require_once 'conexion.php';

    // Verifica si el formulario fue enviado (el botón de "ingresar" fue presionado)
    if (isset($_POST['ing'])){

        // Captura el usuario y contraseña ingresados en el formulario
        $usu = $_POST['usu'];
        $pas = $_POST['pas'];
    }

        

         //consulta segura 
    $stmt = $conex->prepare("SELECT * FROM usuario WHERE usu_usu = ?");
    $stmt->bind_param("s", $usu); // "s" indica que el parámetro es de tipo string
    $stmt->execute();             // Ejecuta la consulta
    $resultado = $stmt->get_result(); // Obtiene el resultado

            // Verifica si se encontró un usuario con ese nombre
    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc(); // Obtiene los datos del usuario como arreglo asociativo

        // Inicia una sesión para mantener al usuario logueado
        session_start();
    
        // Verifica que la contraseña ingresada coincida con el hash guardado en la base de datos
        if (password_verify($pas, $usuario['pass_usu'])) {

            // Guarda el nombre de usuario y rol en variables de sesión
            $_SESSION['usuario'] = $usuario['usu_usu'];
            $_SESSION['rol'] = $usuario['rol_usu'];
                
            // Redirige al usuario según su rol
            if ($usuario['rol_usu'] === 'supervisor') {
                header("Location: supervisor.php"); // Si es supervisor, redirige a la página de supervisor
            } elseif ($usuario['rol_usu'] === 'operario') {
                header("Location: operario.php"); // Si es operario, redirige a la página de operario
            } else {
                // Si el rol no está definido correctamente
                echo "Rol no reconocido.";
            }
    
            exit(); // Termina el script después de redireccionar
        } else {
            // La contraseña es incorrecta
            echo "Contraseña incorrecta<br>";
        }
    } else {
        // No se encontró un usuario con ese nombre
        echo "Usuario no encontrado";
    }

    
         // Cierra la consulta preparada
    $stmt->close();
    // Cierra la conexión con la base de datos
    $conex->close();
?>
</body>
</html>
