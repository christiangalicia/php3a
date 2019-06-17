<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BD
 *
 * @author christian
 */
class BD {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "programa3b";
    private $conn;

    public function __construct() {

        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function consultaAlumnos() {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM alumnos");
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function consultarAlumno($id) {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM alumnos where id=:id");
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

    public function insertarAlumno($nombre,$edad) {
        try {
            $stmt = $this->conn->prepare("insert into alumnos (nombre,edad)values (:nombre, :edad)");
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':edad', $edad);
            return $stmt->execute();
           
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
