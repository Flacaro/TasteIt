<?php

function minLength($args): bool
{
    return strlen($args[0]) >= $args[1];
}

function maxLength($args): bool
{
    return strlen($args[0]) <= $args[1];
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




