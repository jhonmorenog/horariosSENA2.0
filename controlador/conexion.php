<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 * @author jhon
 */
class Conexion {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "horarios";

    public function con(){


        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
// set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this->conn;
    }

}
