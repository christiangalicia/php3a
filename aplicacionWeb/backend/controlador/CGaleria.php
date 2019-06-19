<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CGaleria
 *
 * @author christian
 */
class CGaleria {
    private $modelo;
    public function __construct() {
        $this->modelo= new MGaleria();
    }
   
    public function mostrarGaleriaAdmin(){
        $galeria= $this->modelo->consultaGaleria();
        $acu="";
        foreach ($galeria as $foto){
            $acu.='<h3>'.$foto["nombre"].' | <a href="editar.php?id='.$foto["id"].'"><i class="fa fa-pencil-square-o"></i></a> | <a href="eliminar.php?id='.$foto["id"].'"><i class="fa fa-trash"></i></a></h3>';
        }
        return $acu;
    }
     public function mostrarGaleriaPrincipal(){
        $fotos= $this->modelo->consultaGaleria();
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
    public function subirFotoNueva($foto, $nombre){
        copy($foto["tmp_name"], "../multimedia/".$foto["name"]);
        $this->modelo->insertarFoto("multimedia/".$foto["name"], $nombre);
    }
}
