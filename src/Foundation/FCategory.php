<?php

namespace App\Foundation;


use PDO;

class FCategory extends Foundation {

    function __construct()
    {
        parent::__construct('categories', 'Category');
    }

}