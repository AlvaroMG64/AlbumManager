<?php
require_once 'models/Usuario.php';

class AuthController {

    private $user;

    public function __construct() {
        $this->user = new Usuario();
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
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
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') return;

        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            $_SESSION['error'] = "Token CSRF inválido.";
            header("Location: index.php");
            exit();
        }

        $user = $this->user->login($_POST['identificador']);

        if ($user && password_verify($_POST['password'], $user['password'])) {

            session_regenerate_id(true);

            $_SESSION['idusuario']  = $user['idusuario'];
            $_SESSION['nombre']     = $user['nombre'];
            $_SESSION['apellidos']  = $user['apellidos'];
            $_SESSION['login_time'] = date('d/m/Y H:i:s');

            header("Location: index.php?action=dashboard");
            exit();
        }

        $_SESSION['error'] = "Credenciales incorrectas";
        header("Location: index.php");
        exit();
    }

    public function dashboard() {
        self::checkAuth();
        include 'views/dashboard.php';
    }

    public function logout() {
        $_SESSION = [];

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();
        header("Location: index.php");
    }
}
