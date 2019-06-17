<?php 
include_once './librerias/BD.php';
$bd= new BD();
$alumno= $bd->consultarAlumno(2);
$alumonos= $bd->consultaAlumnos();
$bd->insertarAlumno("erik galica", 44);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $alumno["nombre"];
        ?>
        <hr>
        <?php
        foreach ($alumonos as $alum){
            echo $alum["nombre"]."<br>";
        }
        
        ?>
    </body>
</html>
