<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles_ini.css">
    <title>Document</title>
</head>
<body>
    
<?php


        require_once 'conexion.php';

            if (isset($_POST['ing'])){

                $usu = $_POST['usu'];
                $pas = $_POST['pas'];

            }

        

        // Consulta segura
        $stmt = $conex->prepare("SELECT * FROM usuario WHERE usu_usu = ?");
        $stmt->bind_param("s", $usu);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows === 1) {
            $usuario = $resultado->fetch_assoc();

            session_start();
    
            if (password_verify($pas, $usuario['pass_usu'])) {
                $_SESSION['usuario'] = $usuario['usu_usu'];
                $_SESSION['rol'] = $usuario['rol_usu'];
                

                // Redirigir según el rol
                if ($usuario['rol_usu'] === 'supervisor') {
                    header("Location: supervisor.php");
                } elseif ($usuario['rol_usu'] === 'operario') {
                    header("Location: operario.php");
                } else {
                    echo "Rol no reconocido.";
                   
                }
    
                exit();
            } else {
                echo "Contraseña incorrecta<br>";
               
            }
        } else {
            echo "Usuario no encontrado";
        }
    
        $stmt->close();
        $conex->close();
    
          
    

?>
</body>
</html>