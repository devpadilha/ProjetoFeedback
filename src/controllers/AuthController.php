<?php

namespace ProjetoFeedback\Controllers;

use ProjetoFeedback\Session;

class AuthController {
    public function login() {
        Session::start();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username === 'admin' && $password === '123456') {
                $_SESSION['logged_in'] = true;
                header('Location: /feedbacks');
                exit;
            } else {
                $error = "Usuário ou senha incorretos.";
                require __DIR__ . '/../Views/login.view.php';
            }
        } else {
            require __DIR__ . '/../Views/login.view.php';
        }
    }

    public function logout() {
        Session::destroy();
        header('Location: /');
        exit;
    }
}