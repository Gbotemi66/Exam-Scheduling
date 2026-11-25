<?php
class Database {
    private $host = "localhost";
    private $db_name = "exam_scheduling";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        return $this->connect("mysql:host=" . $this->host . ";dbname=" . $this->db_name);
    }

    public function getServerConnection() {
        return $this->connect("mysql:host=" . $this->host);
    }

    private function connect($dsn) {
        $this->conn = new PDO($dsn, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn->exec("set names utf8");
        return $this->conn;
    }
}
?>
