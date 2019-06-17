<?php

class MGaleria  extends BD{
    
     public function consultaGaleria() {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM galeria");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function consultarFoto($id) {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM galeria where id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $registro) {
                return $registro;
            }
            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function insertarFoto($url,$nombre) {
        try {
            $stmt = $this->conn->prepare("insert into galeria (url,nombre)values (:url, :nombre)");
            $stmt->bindParam(':url', $url);
            $stmt->bindParam(':nombre', $nombre);
            return $stmt->execute();
           
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
