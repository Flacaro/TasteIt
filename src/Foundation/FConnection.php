<?php
/*
namespace App\Foundation;
require_once 'configDB.php';

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

}*/

namespace App\Foundation;

use PDO;
use PDOException;
require_once "configDB.php";

class FConnection {

    private static $instance;

    public function __construct()
    {

    }

    public static function connect() {

        if (!isset(self::$instance)) {
                 try {
                  /* if (file_exists('configDb.txt')) {
                        $fileContent = file_get_contents('configDb.txt');
                        $pieces = explode(";", $fileContent);
                        self::$instance = new PDO('mysql:host=localhost;dbname=tasteIt',$pieces[1],$pieces[2]);
                    }*/
                     self::$instance = new PDO('mysql:host=' . $GLOBALS['$host'] . ';dbname=tasteit', $GLOBALS['$user'], $GLOBALS['$password']);
                 } catch (PDOException $e) {
                     echo "Errore in FConnection: " . $e->getMessage();
                     die;
                 }
                return self::$instance;
             }
    }
}
