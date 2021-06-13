<?php
$connect = new PDO("mysql:host=localhost;dbname=Inscritos", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
    $data = array(':Nombre'   => "%" . $_GET['Nombre'] . "%",':PrimApellido'   => "%" . $_GET['PrimApellido'] . "%",':SegApellido'     => "%" . $_GET['SegApellido'] . "%",':Edad'    => "%" . $_GET['Edad'] . "%");
    $query = "SELECT * FROM Inscritos WHERE Nombre LIKE :Nombre AND PrimApellido LIKE :PrimApellido AND SegApellido LIKE :SegApellido AND Edad LIKE :Edad ORDER BY idInscrito DESC";

    $statement = $connect->prepare($query);
    $statement->execute($data);
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
        $output[] = array('idInscrito'    => $row['idInscrito'],   'Nombre'  => $row['Nombre'],'PrimApellido'   => $row['PrimApellido'],'SegApellido'    => $row['SegApellido'],'Edad'   => $row['Edad']);
    }
    header("Content-Type: application/json");
    echo json_encode($output);
}

if($method == "POST")
{
 $data = array(':Nombre'  => $_POST['Nombre'],':PrimApellido'  => $_POST["PrimApellido"],':SegApellido'    => $_POST["SegApellido"],':Edad'   => $_POST["Edad"]); 
 $query = "INSERT INTO Inscritos (Nombre, PrimApellido, SegApellido, Edad) VALUES (:Nombre, :PrimApellido, :SegApellido, :Edad)";
 $statement = $connect->prepare($query);
 $statement->execute($data); 
}

if($method == 'PUT')
{
 parse_str(file_get_contents("php://input"), $_PUT);
 $data = array(':idInscrito'   => $_PUT['idInscrito'],':Nombre' => $_PUT['Nombre'],':PrimApellido' => $_PUT['PrimApellido'],':SegApellido'   => $_PUT['SegApellido'],':Edad'  => $_PUT['Edad']);
 $query = "UPDATE Inscritos SET Nombre = :Nombre, PrimApellido = :PrimApellido, SegApellido = :SegApellido, Edad = :Edad WHERE idInscrito = :idInscrito";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM Inscritos WHERE idInscrito = '".$_DELETE["idInscrito"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
}
?>