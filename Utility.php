<?php

use App\Controllers\Session;

function setData($view, $data){
        $session=Session::getInstance();
        $fcat=new \App\Foundation\FCategory();
        if ($session->isUserLogged()){
            $user=unserialize($_SESSION["customer"]);
            $categories=$fcat->getAll();
            $cart=$user->getCart();
            $cartProducts=$cart->getProducts();
            $data["categories"]=$categories;
            $data["cartProducts"]= $cartProducts;
            return view($view, $data);
        }
        else{
            $categories=$fcat->getAll();
            array_push($data["categories"], $categories);
            return view($view, $data);
        }
    }

    function minLength($args): bool
    {
        return strlen($args[0]) >= $args[1];
    }

    function maxLength($args): bool
    {
        return strlen($args[0]) <= $args[1];
    }

    function isPositive($args): bool {
        return intval($args[0]) > 0;
    }


    function validate($target, $fields): bool {
        $isValid = true;
        foreach ($fields as $field=>$validators) {
           foreach ($validators as $validator) {
               $splitted = explode(":", $validator);
               //la prima parola splittata
               $functionToCall = $splitted[0];
               //argomenti da passare alla funzione
               $args = [$target[$field], $splitted[1]];
               if(call_user_func(strval($functionToCall), $args) == false) {
                   $isValid = false;
               }

           }
        }
        return $isValid;
    }


    function printObject($data) {
        echo '<pre>'; print_r($data); echo '</pre>';
    }


