<?php
session_start();
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

$page = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

// Router đơn giản
switch ($page) {
    case 'home':
        require_once __DIR__ . '/app/controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;
    case 'contact':
        require_once __DIR__ . '/app/controllers/ContactController.php';
        $controller = new ContactController();
        $controller->index();
        break;
    case 'admin':
        require_once __DIR__ . '/app/controllers/AdminController.php';
        $controller = new AdminController();
        if ($action === 'editPost') {
            $controller->editPost($id);
        } else {
            $controller->index();
        }
        break;
    case 'login':
        require_once __DIR__ . '/app/controllers/AuthController.php';
        $controller = new AuthController();
        $controller->login();
        break;
    case 'logout':
        require_once __DIR__ . '/app/controllers/AuthController.php';
        $controller = new AuthController();
        $controller->logout();
        break;
    default:
        require_once __DIR__ . '/app/controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;
}