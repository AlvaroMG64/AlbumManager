<?php
require_once 'config/Database.php';
require_once 'models/Album.php';
require_once 'controllers/AuthController.php';

class AlbumController {

    private $album;

    public function __construct() {
        $db = new Database();
        $this->album = new Album($db->getConnection());
    }

    public function index() {
        AuthController::checkAuth();
        $albumes = $this->album->read()->fetchAll(PDO::FETCH_ASSOC);
        include 'views/listar.php';
    }

    public function create() {
        AuthController::checkAuth();

        if ($_POST) {
            foreach ($_POST as $k => $v) $this->album->$k = $v;
            $this->album->create();
            header("Location: index.php?action=index");
        }

        include 'views/crear.php';
    }

    public function edit() {
        AuthController::checkAuth();

        if ($_POST) {
            foreach ($_POST as $k => $v) $this->album->$k = $v;
            $this->album->update();
            header("Location: index.php?action=index");
        }

        $this->album->idAlbum = $_GET['id'];
        $this->album->readOne();
        $album_data = $this->album;
        include 'views/editar.php';
    }

    public function delete() {
        AuthController::checkAuth();
        $this->album->idAlbum = $_GET['id'];
        $this->album->delete();
        header("Location: index.php?action=index");
    }
}