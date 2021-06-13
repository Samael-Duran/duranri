<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="Validacion.php" class="form-box animate__zoomIn" id="PaginaP" method="post">
        <h2 class="form-title">Iniciar Sesion</h2>
        <input type="text" id="correo" placeholder="Correo Electronico" name="Correo">
        <input type="password" id="Passw" placeholder="Contrasena" name="Contrasena">
        <button class="btn btn-primary" type="submit" id="Ingresar">Iniciar Sesion</button>
    </form>
</body>
</html>