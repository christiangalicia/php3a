<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CNoticias
 *
 * @author christian
 */
class CNoticias {
    private $modelo;
    
     public function __construct() {
        $this->modelo= new MNoticias();
    }
    public function mostrarNoticia($id){
        $noticia= $this->modelo->consultarNoticia($id);
        return $noticia;
    }
    public function mostrarNoticiasPrincipal(){
        $noticias = $this->modelo->consultarUltimas();
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

}
