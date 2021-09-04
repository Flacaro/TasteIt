<?php


namespace App\Foundation;


use PDO;

class FUser extends Foundation {
    function __construct()
    {
        parent::__construct('users', 'User');
    }

    public function getUserFromReview($reviewId){
        //select
    }
    public function exists($email, $password){
        $query = "SELECT * FROM users WHERE email='".$email. "' AND password='".$password."'";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch();
        if($row==NULL){
            return false;
        }
        else{
            return true;
        }
    }

    public function getByEmail($email){
        $query = "SELECT * FROM users WHERE email= '".$email."'";
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\User");
        $stmt->execute();
        return $stmt->fetch();
    }

}