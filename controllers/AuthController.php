<?php
require_once 'models/Usuario.php';

class AuthController {

    private $user;

    public function __construct() {
        $this->user = new Usuario();
    }

    public static function checkAuth() {
        if (!isset($_SESSION['idusuario'])) {
            header("Location: index.php");
            exit();
        }
    }

    public function login() {
        include 'views/login.php';
    }

    public function authenticate() {
        $user = $this->user->login($_POST['identificador']);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            session_regenerate_id(true);
            $_SESSION['idusuario'] = $user['idusuario'];
            header("Location: index.php?action=dashboard");
            exit();
        }

        $_SESSION['error'] = "Credenciales incorrectas";
        header("Location: index.php");
    }

    public function dashboard() {
        self::checkAuth();
        include 'views/dashboard.php';
    }

    public function logout() {
        session_destroy();
        header("Location: index.php");
    }
}