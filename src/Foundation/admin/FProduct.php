<?php

namespace App\Foundation\admin;

use App\Foundation\FConnection;
use App\Models\Product;

class FProduct
{

    function store($product, $category): string
    {
        $pdo = FConnection::connect();
        $query = "INSERT INTO products(`name`, `description`, `price`, `categoryId`, `imagePath`, `timesOrdered`) VALUES (" . $product->getName() . ", " . $product->getDescription() . ", " . $product->getPrice() . ", " . $category->getId() . ", " . $product->getImagePath() . ", " . $product->getTimesOrdered() . ");";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        //$stmt->debugDumpParams();
        return $pdo->lastInsertId();

    }

    function update($product) {
        $pdo = FConnection::connect();
        $query = "UPDATE products SET name = " . $product->setName() . ", description = " . $product->setDescription() . ", price = " . $product->setPrice() . ";";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        //$stmt->debugDumpParams();
    }

    function delete($id) {
        $pdo = FConnection::connect();
        $query = "DELETE FROM products where id = " . $id . ";";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        //$stmt->debugDumpParams();
    }

    function getAll() {
        $pdo = FConnection::connect();
        $query= "SELECT * FROM products";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $prods = $stmt->fetchAll();
        //$stmt->debugDumpParams();
        $products= [];
        //print_r($prods);
        foreach ($prods as $prod) {
            $p = new Product();
            $p->setId($prod[0]);
            $p->setName($prod[1]);
            $p->setDescription($prod[2]);
            $p->setPrice($prod[3]);
            $p->setImagePath($prod[5]);
            array_push($products, $p);
        }
        //print_r($products);
        return $products;
    }
}