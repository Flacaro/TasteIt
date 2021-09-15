<?php

namespace App\Foundation;

use App\Models\Address;

class FAddress extends FConnection{

    function __construct()
    {
        parent::__construct('shippingaddresses', 'ShippingAddress');
    }

    public function load($id){
        //print_r($id);
        $pdo = FConnection::connect();
        $query = 'select * from shippingaddresses where id='.$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $address=$stmt->fetch();
        $add=new Address();
        $add->setId($address[0]);
        $add->setCap($address[1]);
        $add->setCity($address[2]);
        $add->setStreet($address[3]);
        $add->setHomeNumber($address[4]);
        return $add;
    }
}