<?php

namespace App\Controllers;

use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;

class AuthMiddleware implements IMiddleware{

    public function handle(Request $request): void
    {
        // TODO: Implement handle() method.
        $session=Session::getInstance();
        //if l'utente non è loggato
        if (!$session->isUserLogged()){
            redirect("/login");
        }

    }
}