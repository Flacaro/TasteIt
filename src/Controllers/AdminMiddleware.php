<?php

namespace App\Controllers;

use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;

class AdminMiddleware implements IMiddleware
{

    public function handle(Request $request): void
    {
        $session=Session::getInstance();
        //if l'utente non è loggato
        if (!$session->isRestaurantLogged()){
            redirect("/login");
        }
    }
}