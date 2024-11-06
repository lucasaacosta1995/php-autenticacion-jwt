<?php
require_once 'src/controllers/AuthController.php';

$authController = new AuthController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'login') {
    echo $authController->login($_POST['username'], $_POST['password']);
}
