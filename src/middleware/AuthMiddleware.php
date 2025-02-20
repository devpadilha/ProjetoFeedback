<?php

namespace ProjetoFeedback\Middleware;

use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;
use ProjetoFeedback\Session;

class AuthMiddleware implements IMiddleware {
    public function handle(Request $request): void {
        Session::start();
        if (!Session::isLoggedIn()) {
            header('Location: /');
            exit;
        }
    }
}