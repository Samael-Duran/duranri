<?php
$correo = $_POST['Correo'];
$contrasena = $_POST['Contrasena'];
session_start();
$_SESSION['Correo'] = $correo;
$conexion=mysqli_connect("localhost","root","","DataB");
$consulta="SELECT*FROM Usuarios WHERE Usuario=$correo AND Contrasea = $contrasena";
$resultado = mysqli_query($conexion,$consulta);
$filas=array($resultado);
if($filas)
{
    header("location:PaginaPrincipal.php");
}
else
{
    ?>
    <?php
    include("index.php");
    ?>
    <h2 class = "bad">Error de autentificacion</h2>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);