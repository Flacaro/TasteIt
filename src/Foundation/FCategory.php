<?php

namespace App\Foundation;


use PDO;

class FCategory extends FConnection {

    function __construct()
    {
        parent::__construct('categories', 'Category');
    }
    /*function load($id){
        $pdo = FConnection::connect();
        $query = 'select * from category where id='.$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        //$stmt->debugDumpParams();
    }*/
}