<?php

namespace App\Controllers;

class AuthController
{
public function visualizeLogin(){
    return view ("auth/login", [

    ]);
}
    public function visualizeSignUp(){
        return view ("auth/sign-up", [

        ]);
    }
}