<?php
include_once '../backend/modelo/BD.php';
include_once '../backend/modelo/MAdmin.php';
include_once '../backend/controlador/CAdmin.php';
 session_start();
$admin= new CAdmin();
if(isset($_POST["usuario"]) && isset($_POST["password"])){
    $admin->autentificar($_POST["usuario"], $_POST["password"]);
}

if(isset($_SESSION["autentificado"])){
    header("Location: panel.php");
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
                <div class="col-12">
                    <div class="galeria">
                    <h2>Administrador</h2>
                    
                </div>
            </div>
           
            <div class="row">
                <div class="col-12">
                    <div class="foto">
                    
                        <form method="post" action="index.php">
                            Usuario: <br>
                            <input type="text" name="usuario">
                            <br>
                            Password: <br>
                            <input type="password" name="password">
                            <br>
                            <input type="submit" value="Entrar">
                        </form>
                    </div>
                    
                </div>
                            </div>
            </div>
            
        </div>
        <br>
        <br>
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
