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
}