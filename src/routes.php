<?php

use Pecee\SimpleRouter\SimpleRouter;
use ProjetoFeedback\Controllers\FeedbackController;

// Rota para a página inicial
SimpleRouter::get('/', function() {
    require __DIR__ . '/../src/views/form.view.php';
});

// Rota para listar feedbacks
SimpleRouter::get('/feedbacks', [FeedbackController::class, 'index']);

// Rota para exibir detalhes de um feedback
SimpleRouter::get('/feedbacks/{id}', [FeedbackController::class, 'show']);

// Rota para cadastrar um novo feedback
SimpleRouter::post('/feedback/cadastrar', [FeedbackController::class, 'store']);

// Rota para atualizar o status de um feedback
SimpleRouter::put('/feedback/atualizar', [FeedbackController::class, 'update']);

// Inicia o roteador
SimpleRouter::start();