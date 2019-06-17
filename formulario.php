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
        <form method="post" action="procesarForm.php">
            Nombre<br>
            <input type="text" name="nombre">
            <br>
            Edad<br>
            <input type="number" name="edad">
            <br>
            <input type="submit" value="Enviar">
        </form>
        
        <hr>
        
        <ul>
            <li><a href="procesarForm.php?a=4&b=6">Lorem ipsum dolor.</a></li>
            <li><a href="procesarForm.php?id=4">Necessitatibus, tempora exercitationem!</a></li>
            <li><a href="procesarForm.php?id=5">Quae, totam, perferendis.</a></li>
            <li><a href="procesarForm.php?id=6">Qui, ex, vel!</a></li>
        </ul>
    </body>
</html>
