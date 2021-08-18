<?php

namespace App\Foundation;


use PDO;

class FCategory extends Foundation {

    function __construct()
    {
        parent::__construct('categories', 'Category');
    }

//
//   function getCategoryByIdWithProducts($categoryId) {
//       // select * from tableName where id = 112312;
////       select id from products_
//       $query = "select * from " . $this->table . ' where id = ' . $categoryId;
//       $stmt = $this->connection->prepare($query);
//
//       $stmt->setFetchMode(PDO::FETCH_CLASS, $this->model);
//       $stmt->execute();
//       return $stmt->fetch();
//   }
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