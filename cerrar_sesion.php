
<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Hasta pronto</title>
  <style>
    body {
      background: #111;
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .mensaje {
      text-align: center;
      animation: aparecer 2s ease-in-out;
    }

    .mensaje h1 {
      font-size: 2.5em;
      margin-bottom: 10px;
      color: #66ff99;
    }

    .mensaje p {
      color: #ccc;
    }

    @keyframes aparecer {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .loader {
      border: 4px solid #444;
      border-top: 4px solid #66ff99;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      animation: girar 1s linear infinite;
      margin: 20px auto;
    }

    @keyframes girar {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
</head>
<body>
  <div class="mensaje">
    <h1>¡Hasta pronto!</h1>
    <p>Tu sesión ha sido cerrada correctamente.</p>
    <div class="loader"></div>
    <p>Redirigiendo al login...</p>
  </div>

  <script>
    setTimeout(() => {
      window.location.href = "princi.html"; // Cambia si usas otra página de entrada
    }, 4000); // espera 4 segundos antes de redirigir
  </script>
</body>
</html>