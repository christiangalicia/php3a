<?php 
include_once './backend/modelo/BD.php';
include_once './backend/modelo/MGaleria.php';
include_once './backend/modelo/MNoticias.php';
include_once './backend/controlador/Controlador.php';
$controlador = new Controlador();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/style.css"/>
        <link rel="stylesheet" href="style/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    </head>
    <body >
        <div class="fixed">
            <div class="container">
                <div class="row">
                    <header>
                        <div class="col-6"><h1>tempo</h1></div>
                        <div class="col-6">
                            <nav>
                                <ul >
                                    <li class="active"><a href="#">Lorem.</a></li>
                                    <li><a href="#"  id="resultado">Quas.</a></li>
                                    <li ><a href="#">Ratione?</a></li>
                                    <li><a href="#" id="evento">Quis.</a></li>
                                    <li><a href="#">áéíóúñ</a></li>
                                    <li><a href="#">&aacute;&eacute;&iacute;</a></li>
                                </ul>
                            </nav>

                        </div>
                    </header>
                </div>  
            </div>
        </div>


        <div class="slider">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <section >
                            <h2> WELCOME TO <span>TEMPO</span></h2>
                            <h3>MULTIPURPOSE HTML5 BOOTSTRAP TEMPLATE.</h3>
                            <a href="#">Learn more <i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="slogan">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <section >
                            <h2>Say Hey to Tempo!!</h2>
                            <h3>Full Responsive HTML5 Bootstrap Template.</h3>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="galeria">
                        <h2>Our Privious Works</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <hr>
                    </div>
                    <div class="botones">
                        <a class="active2" href="#">Lorem.</a>
                        <a href="#">Delectus.</a>
                        <a href="#">Asperiores.</a>
                        <a href="#">Possimus.</a>
                        <a href="#">Eius?</a>
                    </div>
                </div>
            </div>
            <div class="galeria">
                <div class="row">
                    <?php echo $controlador->mostrarGaleriaPrincipal(); ?>
                </div>
                

                <div class="row">
                    <div class="col-12">
                        <h2>Our Privious Works</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <hr>
                    </div>
                </div>  

                <div class="row team">
                    
                    <?php echo $controlador->mostrarNoticiasPrincipal() ?>
                </div>
            </div>
        </div>
        <div class="slogan">
            <div class="container">
                <div class="row">
                    <div class="col-9">

                        <h3>Full Responsive HTML5 Bootstrap Template.</h3>

                    </div>
                    <div class="col-3">
                        <a href="#">Request A Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="galeria">
            <div class="container formulario">
                <div class="row">
                    <div class="col-12">
                        <h2>Our Privious Works</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <hr>
                    </div>
                </div>  
                <form method="post">
                    <div class="row">
                        <div class="col-4"><input type="text" placeholder="Nombre"></div>
                        <div class="col-4"><input type="text" placeholder="Telefono"></div>
                        <div class="col-4"><input type="text" placeholder="Asunto"></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea  placeholder="Mensaje"></textarea>
                            <input type="submit" value="Enviar Mensaje">
                        </div>
                    </div>
                </form>
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
        <script src="scripts/logica.js"></script>
    </body>
</html>
