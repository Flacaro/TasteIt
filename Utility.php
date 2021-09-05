<?php

function validate($fields): bool {

    $isValid = false;

    foreach ($fields as $field) {
       $validators = $fields[$field];
       foreach ($validators as $validator) {
           $splitted = explode(":", $validator);
           //la prima parola splittata
           $functionToCall = $splitted[0];
           //argomenti da passare alla funzione
           $args = [$field, $splitted[1]];
           if(call_user_func($functionToCall. $args) == true) {
               $isValid = true;
           }
       }
    }
    return $isValid;
}

//funzione che prende in ingresso gli argomenti splittati e restituisce
//true se è vero che hanno lunghezza minima
function minLength($args) {
    return strlen($args[0]) > $args[1];
}

function maxLength($args) {
    return strlen($args[0]) < $args[1];
}

//funzione che mi vede se gli argomenti dei campi non sono nulli
function required($args) {
    //isset controlla se un campo ha un valore assegnato
    return isset($args[0]);
}


class Validator{
    public static function minLength($min, $field){
        return strlen($field)>$min;
    }
}