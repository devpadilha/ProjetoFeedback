<?php
namespace ProjetoFeedback\Controllers;

use ProjetoFeedback\Models\Feedback;

class FeedbackController {
    public function index() {
        $feedbackModel = new Feedback();
        $feedbacks = $feedbackModel->getAll();
        require 'src/views/feedbacks.view.php';
    }

    public function show($id) {
        $feedbackModel = new Feedback();
        $feedback = $feedbackModel->getById($id);
        require 'src/views/feedbacks-show.view.php';
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

    public function update($id, $status) {
        $feedbackModel = new Feedback();
        $feedbackModel->updateStatus($id, $status);
        header('Location: /feedbacks');
    }
}