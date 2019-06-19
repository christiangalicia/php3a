<?php
include_once '../backend/modelo/BD.php';
include_once '../backend/modelo/MAdmin.php';
include_once '../backend/modelo/MGaleria.php';
include_once '../backend/controlador/CAdmin.php';
include_once '../backend/controlador/CGaleria.php';
$galeria= new CGaleria();
session_start();
if(!isset($_SESSION["autentificado"])){
    header("Location: index.php");
}
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../style/style.css"/>
        <link rel="stylesheet" href="../style/font-awesome.min.css">
    </head>
    <body >
        <div class="fixed">
            <div class="container">
                <div class="row">
                    <header>
                        <div class="col-6"><h1>tempo</h1></div>
                        <div class="col-6">
                            <nav>
                                <ul>
                                    <li><a href="../">Regresar.</a></li>
                                    <li><a href="salir.php"><i class="fa fa-power-off"></i></a></li>
                                </ul>
                            </nav>

                        </div>
                    </header>
                </div>  
            </div>
        </div>
        
      
  
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
         <div class="container">
            <div class="row">
                <div class="col-12 titulos">
                    <h2>Bienvenido <?php echo $_SESSION["autentificado"]["nombre"] ?></h2>
                    
                    <hr>
                   <div  style="border: 1px solid red">
                    
                        <h1>Galeria</h1>
                        <a href="nuevo.php">Nueva Foto</a><hr>
                        <?php echo $galeria->mostrarGaleriaAdmin() ?>
                    </div>

                </div>
            </div>
      
        <br>
        <br>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Follow us on</h2>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
