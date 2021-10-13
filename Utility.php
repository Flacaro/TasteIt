<?php

use App\Controllers\Session;
use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;

function setData($view, $data){
        $session=Session::getInstance();
        $fcat=new \App\Foundation\FCategory();
        if ($session->isUserLogged()){
            $user=$session->loadUser();
            $categories=$fcat->getAll();
            $cart=$user->getCart();
            $favId = $user->getFav()->getId();
            //printObject($cart);
            $cartProducts=$cart->getProducts();
            $data["categories"]=$categories;
            $data["cartId"]=$cart->getId();
            $data["cartProducts"]= $cartProducts;
            $data["user"]= $user;
            $data["favId"] = $favId;
            return view($view, $data);
        }
        else{
            $categories=$fcat->getAll();
            $data["categories"]=$categories;
            $data["user"]=NULL;
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
                   print_r($functionToCall);
               }

           }
        }
        return $isValid;
    }


    function printObject($data) {
        echo '<pre>'; print_r($data); echo '</pre>';
    }


    function uploadImage(): string {
        $msg = "";
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "/src/assets/images/" . $filename;
        if (move_uploaded_file($tempname, $folder)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }
        return $folder;
    }


