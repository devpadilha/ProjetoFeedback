<?php

use Pecee\SimpleRouter\SimpleRouter;
use ProjetoFeedback\Controllers\AuthController;
use ProjetoFeedback\Controllers\FeedbackController;
use ProjetoFeedback\Middleware\AuthMiddleware;

// Rotas protegidas
SimpleRouter::group(['middleware' => AuthMiddleware::class], function() {
    SimpleRouter::get('/feedbacks', [FeedbackController::class, 'index']);
    SimpleRouter::get('/feedbacks/{id}', [FeedbackController::class, 'show']);
    SimpleRouter::put('/feedback/atualizar', [FeedbackController::class, 'update']);
});

// Rotas públicas
SimpleRouter::get('/', function() {
    require __DIR__ . '/../src/views/form.view.php';
});
SimpleRouter::post('/feedback/cadastrar', [FeedbackController::class, 'store']);

// Rotas de autenticação
SimpleRouter::get('/login', [AuthController::class, 'login']);
SimpleRouter::post('/login', [AuthController::class, 'login']);
SimpleRouter::get('/logout', [AuthController::class, 'logout']);

// Inicia o roteador
SimpleRouter::start();