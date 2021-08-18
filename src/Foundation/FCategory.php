<?php

namespace App\Foundation;


use PDO;

class FCategory extends Foundation {

    function __construct()
    {
        parent::__construct('categories', 'Category');
    }


//l'id è quello dell'immagine
    function getImageFromId($id){
        //select image from images where id in (select imageId from categories where id=$id);
        $query= 'select image from images where id='.$id.');';
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Image");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}