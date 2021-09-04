<?php

namespace App\Controllers;

use App\Foundation\FRestaurant;
use App\Foundation\FCustomer;
use App\Models\Customer;
use App\Views\VAuth;

class AuthController
{
    public function visualizeLogin(){
        $vauth= new VAuth();
        $vauth->visualizeLogin("");
    }
    public function visualizeSignUp(){
        $vauth= new VAuth();
        $vauth->visualizeSignUp("");
    }

    public function login(){
        //print_r("ciao");
        $session=Session::getInstance();
        $email = $_POST["email"];
        $password = $_POST["password"];
        $fuser=new FCustomer();
        $frest=new FRestaurant();
        $message="";
        if ($fuser->authentication($email, $password)){
            $user=$fuser->getByEmail($email);
            $session->saveUserInSession($user);
            redirect(url("home"));
        }
        else if($frest->authentication($email, $password)){
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

    public function signUp() {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user =new CustomerController();
        $fuser = new FCustomer();
        //print_r($fuser->exists($email));
        $message = "";
        if (!$fuser->exists($email)) {
            //print_r("ciao");
            $customer = new Customer();
            $customer->setName($name);
            $customer->setSurname($surname);
            $customer->setEmail($email);
            $customer->setPassword($password);
            $user->create($customer);
            redirect(url('/login'));
        }
        else {
            $message ="I dati non sono corretti";
        }
        $vauth= new VAuth();
        $vauth->visualizeSignUp($message);
}

    public function logout(){

    }
}