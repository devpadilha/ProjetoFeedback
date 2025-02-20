<?php
namespace ProjetoFeedback\Controllers;

use ProjetoFeedback\Models\Feedback;

class FeedbackController {
    public function index() {
        $feedbackModel = new Feedback();
        $feedbacks = $feedbackModel->getAll();
        require __DIR__ . '/../views/feedbacks.view.php';
    }

    public function show($id) {
        $feedbackModel = new Feedback();
        $feedback = $feedbackModel->getById($id);
        if(! $feedback) {
            die ("Feedback não encontrado");
        }
        require __DIR__ . '/../views/feedbacks-show.view.php';
    }

    public function store() {
        $data = [
            'titulo' => $_POST['titulo'],
            'descricao' => $_POST['descricao'],
            'tipo' => $_POST['tipo'],
            'status' => 'recebido'
        ];
        $feedbackModel = new Feedback();
        $feedbackModel->store($data);
        header('Location: /feedbacks');
    }

    public function update() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'PUT') {
        // Obtém os dados do formulário
        $id = $_POST['id'];
        $status = $_POST['status'];

        // Atualiza o status do feedback no banco de dados
        $feedbackModel = new Feedback();
        $feedbackModel->updateStatus($id, $status);

        // Redireciona para a lista de feedbacks
        header('Location: /feedbacks');
        exit;
    } else {
        die("Método HTTP não permitido.");
    }
    }

    public function login() {
    // Verifica se o formulário de login foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Verifica as credenciais (usuário "admin" e senha "123456")
        if ($username === 'admin' && $password === '123456') {
            // Inicia a sessão e redireciona para a lista de feedbacks
            session_start();
            $_SESSION['logged_in'] = true;
            header('Location: /feedbacks');
            exit;
        } else {
            // Exibe uma mensagem de erro
            $error = "Usuário ou senha incorretos.";
            require __DIR__ . '/../Views/login.view.php';
        }
    } else {
        // Exibe o formulário de login
        require __DIR__ . '/../Views/login.view.php';
    }
}

}