<?php
/*

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

}*/
namespace App\Foundation;

use PDO;
use PDOException;
include('configDB.php');

class FConnection
{
    /**
     * Istanza della classe.
     * @var FConnection
     */
    private static $instance;
    public function __construct() {
    }

    /**
     * Implementa il metodo getInstance() del Singleton.
     * @return PDO
     */
    public static function connect() {

        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=$hostname;dbname=$dbname', $user, $pass);

            } catch (PDOException $e) {
                echo "Errore in FConnectionDB: " . $e->getMessage();
                die;
            }
        }

        return self::$instance;
    }
}
