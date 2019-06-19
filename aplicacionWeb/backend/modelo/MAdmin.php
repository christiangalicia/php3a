<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MAdmin
 *
 * @author christian
 */
class MAdmin extends BD {
    
    public function autentificar($usuario,$password){
         try {
             $passw= md5($password);
            $stmt = $this->conn->prepare("SELECT * FROM usuario where usuario=:usuario and password=:password");
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':password', $passw);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $registro) {
                return $registro;
            }
            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
}
