<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido</title>
        <link rel="stylesheet" href="PaginaP.css">
    </head>
    <body>
        <h2 class = "form-title">Bienvenido</h2>
        <form action = "j" class="form-box animate__zoomIn" id="Index">
            <div class = "Container">
            <?php
            session_start();
                print_r($_SESSION);
            ?>
            <a href="logout.php">Cerrar Sesión</a>
            </div>
        </form>
    </body>
</html>
</html>