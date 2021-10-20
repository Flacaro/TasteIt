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
        $query = 'select * from shippingaddresses where id = '. $id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $address = $stmt->fetchAll();
        $add = new Address();
        //address è vuoto
        print_r($query);
        $add->setId($address[0]);
        $add->setCap($address[1]);
        $add->setCity($address[2]);
        $add->setStreet($address[3]);
        $add->setHomeNumber($address[4]);
        return $add;
    }

    public function loadFromCustomerId($id){
        //print_r($id);
        $pdo = FConnection::connect();
        $query = 'select * from shippingaddresses where customerId='.$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $addresses=$stmt->fetchAll();
        $a=[];
        foreach ($addresses as $address){
        $add=new Address();
        $add->setId($address[0]);
        $add->setCap($address[1]);
        $add->setCity($address[2]);
        $add->setStreet($address[3]);
        $add->setHomeNumber($address[4]);
        array_push($a, $add);
        }
        return $a;
    }

    public function exist($id){
        $pdo = FConnection::connect();
        $query = 'select * from shippingaddresses where id='.$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $address=$stmt->fetch();
        if ($address!=NULL){
            return true;
        }
        else{
            return false;
        }
    }

    public function store($address){
        $pdo = FConnection::connect();
        $id=$address->getId();
        $cap=$address->getCap();
        $city=$address->getCity();
        $street=$address->getStreet();
        $homenumber=$address->getHomeNumber();
        //QUESTO LO PRENDIAMO DALLA SESSIONE
        $customerid="dalla sessione";
        $query="INSERT INTO `shippingaddresses`VALUES ('.$id.','.$cap.','.$city.','.$street.','.$homenumber.','.$customerid.')";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

    public function update($address){
        $pdo = FConnection::connect();
        $id=$address->getId();
        $cap=$address->getCap();
        $city=$address->getCity();
        $street=$address->getStreet();
        $homenumber=$address->getHomeNumber();
        //QUESTO LO PRENDIAMO DALLA SESSIONE
        $customerid="dalla sessione";
        $query="UPDATE `shippingaddresses` SET `id`='.$id.',`cap`='.$cap.',`city`='.$city.',`street`='.$street.',`homeNumber`='.$homenumber.',`customerId`='.$customerid.' WHERE id=".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

    public function delete($id){
        $pdo = FConnection::connect();
        $query="delete from shippingaddresses where id=".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

}