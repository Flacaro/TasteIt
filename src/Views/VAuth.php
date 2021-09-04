<?php

namespace App\Views;

class VAuth
{
    public function visualizeLogin($message){
        return view ("auth/login", [
            "message"=>$message
        ]);
    }

    public function visualizeSignUp(){
        return view ("auth/sign-up", [

        ]);
    }

}