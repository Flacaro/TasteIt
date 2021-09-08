<?php

namespace App\Foundation;

class FShippingAddress extends Foundation{

    function __construct()
    {
        parent::__construct('shippingaddresses', 'ShippingAddress');
    }
}