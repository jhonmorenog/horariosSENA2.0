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
class conexion {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "horarios";
    private $conn;

    function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
// Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    
    function consulta($sql){
        return  $this->conn->query($sql);
    }
    function cerrarConexion(){
        $this->conn->close();
    }

}

?>
