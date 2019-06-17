<?php

class MNoticias  extends BD{
    
    public function consultarNoticia($id){
         try {
            $stmt = $this->conn->prepare("SELECT * FROM noticias where id=:id");
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
    public function consultarTodas(){
        try {
            $stmt = $this->conn->prepare("SELECT * FROM noticias");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function consultarUltimas(){
        try {
            $stmt = $this->conn->prepare("SELECT * FROM noticias order by id  desc limit 2");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
