<?php
class Album {
    private $conn;
    private $table = "albumes";

    public $idAlbum;
    public $titulo;
    public $artista;
    public $genero;
    public $fecha_lanzamiento;
    public $num_canciones;
    public $es_explicit;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        return $this->conn->query("SELECT * FROM {$this->table} ORDER BY titulo ASC");
    }

    public function readOne() {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE idAlbum=?");
        $stmt->execute([$this->idAlbum]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        foreach ($data as $k => $v) $this->$k = $v;
    }

    public function create() {
        $sql = "INSERT INTO {$this->table} (titulo, artista, genero, fecha_lanzamiento, num_canciones, es_explicit) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$this->titulo,$this->artista,$this->genero,$this->fecha_lanzamiento,$this->num_canciones,$this->es_explicit]);
    }

    public function update() {
        $sql = "UPDATE {$this->table} SET titulo=?, artista=?, genero=?, fecha_lanzamiento=?, num_canciones=?, es_explicit=? WHERE idAlbum=?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$this->titulo,$this->artista,$this->genero,$this->fecha_lanzamiento,$this->num_canciones,$this->es_explicit,$this->idAlbum]);
    }

    public function delete() {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE idAlbum=?");
        return $stmt->execute([$this->idAlbum]);
    }
}