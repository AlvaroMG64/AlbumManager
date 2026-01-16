<?php
session_start();

require_once 'controllers/AuthController.php';
require_once 'controllers/AlbumController.php';

$auth = new AuthController();
$album = new AlbumController();

$action = $_GET['action'] ?? 'login';

switch ($action) {
    case 'authenticate': $auth->authenticate(); break;
    case 'dashboard': $auth->dashboard(); break;
    case 'logout': $auth->logout(); break;

    case 'index': $album->index(); break;
    case 'create': $album->create(); break;
    case 'edit': $album->edit(); break;
    case 'delete': $album->delete(); break;

    default: $auth->login();
}