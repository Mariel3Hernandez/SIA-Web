<?php

/**
 * @author JAVEROS
 */

class Conexion {

    private $cnx;
    
    function conectar() {
        $servername = "localhost";
        $db = "";
        $username = "root";
        $password = "";
        
        $this->cnx = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->cnx;
    }
    
    function desconectar() {
        $this->cnx = null;
    }
}