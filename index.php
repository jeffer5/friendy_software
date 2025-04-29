
<!DOCTYPE html><!--inicio pagina principal -->
<html lang="en"> <!-- Define el idioma del contenido de la página (en español en este caso) -->
<head>
    <meta charset="UTF-8"> <!-- Establece la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Hace que el diseño sea responsive en dispositivos móviles -->
    <title>Pagina principal</title> <!-- Título que aparecerá en la pestaña del navegador -->
</head>
<body>

    <?php
        // Se incluyen tres archivos HTML que componen la estructura de la página principal.
        // Esto permite mantener el código modular y reutilizable.

        require_once 'content_princi/header.html'; // Carga la cabecera de la página (logo, navegación, etc.)
        require_once 'content_princi/main.html';   // Carga el contenido principal
        require_once 'content_princi/footer.html'; // Carga el pie de página (información de contacto, derechos, etc.)
    ?>

</body>
</html>
