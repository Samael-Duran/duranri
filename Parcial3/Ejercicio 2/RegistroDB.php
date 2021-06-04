<?php
include "ConectarDB.php";
try {
    $consultaSql = "select idUsuario,Nombre,Correo,Contrasena from Usuarios";
    $consulta = $DBH -> prepare($consultaSql);
    $consulta -> execute();
    
    while($resultado = $consulta->fetch(PDO::FETCH_OBJ))
    {
        print "<h2><pre>fetch(PDO::FETCH_OBJ)</pre></h2>";
        print "<br>";
        var_dump($resultado);
        print "<br>";
        printf("<b>idUsuario  = </b> ".$resultado->idUsuario."<br>");
        printf("<b>Nombre  = </b> ".$resultado->Nombre."<br>");
        printf("<b>Correo  = </b> ".$resultado->Correo."<br>");
        printf("<b>Contrasena  = </b> ".$resultado->Contrasena."<br>");    
    }

} catch(PDOException $e) {
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}
?>