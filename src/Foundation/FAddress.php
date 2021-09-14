<?php

namespace App\Foundation;

class FAddress extends FConnection{

    function __construct()
    {
        parent::__construct('shippingaddresses', 'ShippingAddress');
    }
}