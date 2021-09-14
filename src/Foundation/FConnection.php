<?php


namespace App\Foundation;



use App\Models\Product;
use PDO;
use PDOException;

abstract class FConnection {
    private static $instance;
    private static $user = 'root';
    private static $pass = 'password';

    public function __construct() {
    }

    public static function connect(){
        if(!isset(self::$instance)){
            try{
                self::$instance = new PDO('mysql:host=localhost;dbname=tasteIt', FConnection::$user, FConnection::$pass);
            }
            catch(PDOException $ex){

            }
        }
        return self::$instance;
    }

}