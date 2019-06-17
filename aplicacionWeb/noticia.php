<?php 
include_once './backend/modelo/BD.php';
include_once './backend/modelo/MGaleria.php';
include_once './backend/modelo/MNoticias.php';
include_once './backend/controlador/Controlador.php';
$controlador = new Controlador();
$id = $_GET["id"];
$noticia = $controlador->mostrarNoticia($id);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?php echo $noticia["noticia"] ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/style.css"/>
        <link rel="stylesheet" href="style/font-awesome.min.css">
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
                                    <li><a href="#">Lorem.</a></li>
                                    <li><a href="#">Quas.</a></li>
                                    <li ><a href="#">Ratione?</a></li>
                                    <li class="active"><a href="#">Quis.</a></li>
                                    <li><a href="#">Voluptatem.</a></li>
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
                    <h2>titulo de la noticia</h2>
                    
                </div>
            </div>
           
            <div class="row">
                <div class="col-12">
                    <div class="foto">
                    <img src="<?php echo $noticia["url"] ?>" alt="">
                    
                    </div>
                    <div class="">
                       <?php echo $noticia["noticia"] ?>.
                    </div>
                </div>
                            </div>
            </div>
            
        </div>
    
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
