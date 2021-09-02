<?php

namespace App\Views;

class VAuth
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