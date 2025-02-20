<?php

// Carrega o autoload do Composer
require __DIR__ . '/../vendor/autoload.php';

// Carrega as classes personalizadas
require __DIR__ . '/../app/Database.php';
require __DIR__ . '/../app/Session.php';

// Inicia a sessão
startSession();

// Carrega as rotas
require '../src/routes.php';