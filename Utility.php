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
            //printObject($cart);
            $cartProducts=$cart->getProducts();
            $data["categories"]=$categories;
            $data["cartId"]=$cart->getId();
            $data["cartProducts"]= $cartProducts;
            $data["user"]= $user;
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

class Middleware implements IMiddleware{
    public function handle(Request $request): void
    {

        // Authenticate user, will be available using request()->user
        $session = Session::getInstance();
        $request->user = $session->isRestaurantLogged();

        // If authentication failed, redirect request to user-login page.
        if($request->user === null) {
            $request->setRewriteUrl(url('user.login'));
        }

    }
}


