<?php


namespace App\Foundation;



use App\Models\Product;
use PDO;

abstract class Foundation {
    private $dbh;
    private $user = 'root';
    private $pass = 'password';
    private $table;
    private $model;

    public function __construct($table, $model) {
        $this->dbh = new PDO('mysql:host=localhost;dbname=esempio', $this->user, $this->pass);
        $this->table = $table;
        $this->model = $model;
    }

    function getAll() {
        $query = 'select * from ' . $this->table;
        $stmt = $this->dbh->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'App\Models\\' . $this->model);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function create($object) {
        $objectKeys = [];

        $query = 'insert into ' . $this->table . '(';

        foreach($object as $key => $val) {
            array_push($objectKeys, $key);
        }
        // Concatena gli elementi di un array con una stringa (separatore)
        // $arr = ['kiwi', 'pane', 'latte']
        // join(', ', $arr) ==> "kiwi, pane, latte"
        // ... values(:name, :price, ......);
        $stmtParams = join(", :", $objectKeys);
        // insert into table(name, price, ....) ...
        $columnNames = join(' ', $objectKeys);

        $query = $query . $columnNames . ') values (:'  . $stmtParams . ');';

        $stmt = $this->dbh->prepare($query);

        foreach($object as $key => $val) {
            $stmt->bindParam(':' . $key, $val);
        }

        $stmt->execute();

    }

}