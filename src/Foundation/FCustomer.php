<?php


namespace App\Foundation;


use PDO;

class FCustomer extends Foundation {
    function __construct()
    {
        parent::__construct('customers', 'Customer');
    }

    public function getUserFromReview($reviewId){
        //select
    }
    public function authentication($email, $password){
        $query = "SELECT * FROM customers WHERE email='".$email. "' AND password='".$password."'";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch();
        if($row==NULL) {
            return false;
        }
        else{
            return true;
        }
    }

    public function getByEmail($email){
        $query = "SELECT * FROM customers WHERE email= '".$email."'";
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Customer");
        $stmt->execute();
        return $stmt->fetch();
    }

    public function exists($email) {
        $query = "SELECT email FROM customers WHERE email='".$email . "'" . " UNION (select email from restaurant where email ='" . $email . "')";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch();
        if($row==NULL) {
            return false;
        }
        else{
            return true;
        }
    }


}