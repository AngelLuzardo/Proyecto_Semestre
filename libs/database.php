<?php 

class Database{
    private $host;
    private $db;
    private $user;
    private $password;

    public function __construct(){
        $this->host = constant("HOST");
        $this->db = constant("DB");
        $this->user = constant("USER");
        $this->password = constant("PASSWORD");
    }
    
    function connect(){
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    function disconnect(){
        $this->conn->close();
    }
}



?>