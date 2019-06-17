<?php
include_once './librerias/Alumno.php';
$alumno = new Alumno("juan", 23);
$alumno2 = new Alumno("david", 13);
$alumno->insertarCalificacion("matematicas", 7);
$alumno->insertarCalificacion("ingles", 8);
$alumno->insertarCalificacion("programcion", 8);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       echo $alumno->informacionAlumno();
       echo $alumno->imprimirCalificaciones();
        ?>
    </body>
</html>
