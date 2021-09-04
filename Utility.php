<?php

function validate($target, $fields): bool {
    $isValid = true;
    foreach ($fields as $field) {
        if (!isset($target[$field]) or $target[$field] == "") {
            $isValid = false;
        }
    }
    return $isValid;
}

/*function validate1($target, $fields): bool {
    $isValid = true;
    foreach ($fields as $field) {
        if (!$fields[$field]($target[$field])) {
            $isValid = false;
        }
    }
    return $isValid;
}*/

class Validator{
    public static function minLength($min, $field){
        return strlen($field)>$min;
    }
}