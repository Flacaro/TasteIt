<?php

namespace App\Foundation;


class FCategory extends Foundation {

    function __construct()
    {
        parent::__construct('category', 'Category');
    }

   function getCategoryByIdWithProducts($categoryId) {
       // select * from tableName where id = 112312;
       $query = "select * from " . $this->table . ' where id = ' . $categoryId;
       $stmt = $this->connection->prepare($query);

       $stmt->setFetchMode(PDO::FETCH_CLASS, $this->model);
       $stmt->execute();
       return $stmt->fetch();
   }
}