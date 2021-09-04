<?php

namespace App\Controllers;

use App\Foundation\FRestaurant;
use App\Foundation\FUser;
use App\Views\VAuth;

class AuthController
{
public function visualizeLogin(){
    $vauth= new VAuth();
    $vauth->visualizeLogin("");
}
    public function visualizeSignUp(){
        $vauth= new VAuth();
        $vauth->visualizeSignUp();
    }

    public function login(){
        //print_r("ciao");
        $session=Session::getInstance();
        $email = $_POST["email"];
        $password = $_POST["password"];
        $fuser=new FUser();
        $frest=new FRestaurant();
        $message="";
        if ($fuser->exists($email, $password)){
            $user=$fuser->getByEmail($email);
            $session->saveUserInSession($user);
            redirect(url("home"));
        }
        else if($frest->exists($email, $password)){
            $restaurant=$frest->getByEmail($email);
            $session->saveUserInSession($restaurant);
            redirect(url("home"));
        }
        else{
            $message="il login non è andato a buon fine";
        }
        $vauth= new VAuth();
        $vauth->visualizeLogin($message);
    }

    public function signUp(){

    }

    public function logout(){

    }
}