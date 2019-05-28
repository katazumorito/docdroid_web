<?php
    	header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    class DbConfig{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "docdroid";


    public function connect()
    {
        try {
           $conn = new PDO("mysql:host=$this->servername;dbname=$this->db_name;", $this->username, $this->password);
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error" . $e->getMessage();
        }

        return $conn;
    }
}
?>