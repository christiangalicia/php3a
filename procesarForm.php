<?php
include_once './librerias/Alumno.php';
$resultado="";
if (isset($_POST["nombre"]) && isset($_POST["edad"])){
    $nombre= $_POST["nombre"];
    $edad= $_POST["edad"];
    $alumno = new Alumno($nombre, $edad);
    $resultado=$alumno->informacionAlumno();
}
$suma="";
if(isset($_GET["a"]) && isset($_GET["b"])){
    $suma =$_GET["a"]+$_GET["b"];
}
$ide="";
if(isset($_GET["id"])){
    $ide=$_GET["id"];
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<h1>". $resultado ."</h1>";
        ?>
        <?php
        echo "<h1>suma= ". $suma ."</h1>";
        ?>
        <?php
        echo "<h1>id= ". $ide ."</h1>";
        ?>
    </body>
</html>
