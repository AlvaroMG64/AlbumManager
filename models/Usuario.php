<?php
require_once 'config/Database.php';

class Usuario {
    private $conn;
    private $table = "usuarios";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function login($idusuario) {
        $sql = "SELECT * FROM {$this->table} WHERE idusuario=? AND admitido=1 LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$idusuario]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}