<?php

class Controlador {
    private $modeloGaleria;
    private $modeloNoticias;
    public function __construct() {
        $this->modeloGaleria= new MGaleria();
        $this->modeloNoticias= new MNoticias();
    }
    public function mostrarNoticia($id){
        $noticia= $this->modeloNoticias->consultarNoticia($id);
        return $noticia;
    }
    public function mostrarNoticiasPrincipal(){
        $noticias = $this->modeloNoticias->consultarUltimas();
        $acu="";
        foreach ($noticias as $noticia){
            $acu .= '<div class="col-6">
                        <div class="row">
                            <div class="col-6"><img src="'.$noticia["url"].'" alt=""></div>
                            <div class="col-6 margen-80">
                                <span>'. substr($noticia["noticia"],0,60).'...</span>
                                    <hr>
                                <a href="noticia.php?id='.$noticia["id"].'">Request A Quote</a>
                                <hr>
                            </div>
                        </div>
                    </div>';
        }
        return $acu;
    }

    public function mostrarGaleriaPrincipal(){
        $fotos= $this->modeloGaleria->consultaGaleria();
        $acu="";
        foreach ($fotos as $foto){
            $acu .= '<div class="col-3">
                        <div class="foto">
                            <img src="'.$foto["url"].'" alt="">
                            <div class="titulo">
                                '.$foto["nombre"].'
                            </div>
                        </div>
                    </div>';
        }
        return $acu;
    }
}
