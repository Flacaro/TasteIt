<?php

namespace App\Controllers;

use App\Views\VAuth;

class AuthController
{
public function visualizeLogin(){
    $vauth= new VAuth();
    $vauth->visualizeLogin();
}
    public function visualizeSignUp(){
        $vauth= new VAuth();
        $vauth->visualizeSignUp();
    }
}