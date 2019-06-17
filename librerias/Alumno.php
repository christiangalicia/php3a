<?php

class Alumno {
    private $nombre;
    private $edad;
    private $calificaciones;
    private $c=0;
    public function __construct($nombre, $edad){
        $this->nombre=$nombre;
        $this->edad= $edad;
        
    }
    public function informacionAlumno(){
        return $this->nombre. " Edad ".$this->edad;
    }
    
    public function insertarCalificacion($materia,$calificacion){
        $this->calificaciones[$this->c]["materia"]=$materia;
        $this->calificaciones[$this->c]["calificacion"]=$calificacion;
        $this->c++;
    }
    
    public function imprimirCalificaciones(){
        foreach ($this->calificaciones as $calif){
            echo "<hr>Materia ". $calif["materia"]. " Calif ". $calif["calificacion"];
        }
    }
}
