<?php


namespace App\Foundation;



use App\Models\Product;
use PDO;

abstract class Foundation {
    protected $connection;
    private $user = 'root';
    private $pass = 'password';
    protected $table;
    protected $model;
    private $modelNamespace = 'App\Models\\';

    public function __construct($table, $model) {
        $this->connection = new PDO('mysql:host=localhost;dbname=esempio', $this->user, $this->pass);
        $this->table = $table;
        $this->model = $this->modelNamespace . $model;
    }

    function getAll() {
        $query = 'select * from ' . $this->table;
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->model);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getById($id) {
        // select * from tableName where id = 112312;
        $query = "select * from " . $this->table . ' where id = ' . $id;
        $stmt = $this->connection->prepare($query);

        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->model);
        $stmt->execute();
        return $stmt->fetch();
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
        $columnNames = join(', ', $objectKeys);

        $query = $query . $columnNames . ') values (:'  . $stmtParams . ');';

        $stmt = $this->connection->prepare($query);

        foreach($object as $key => $val) {
            $stmt->bindValue(':' . $key, $val);
        }

        $stmt->execute();
        //$stmt->debugDumpParams();

    }


    function update($id, $object){
        $columnsAndValues = []; // "id = :id", "name = :name", ....
        // id, name, price, description
        // update tableName set column = :newVal, column2 = :newValu2.... where id = $id;
        $query = 'update ' . $this->table . ' set ';
        foreach($object as $key => $val) {
            array_push($columnsAndValues, $key . ' = :' . $key);
        }

        $query = $query . join(', ', $columnsAndValues) . ' where id = ' . $id;

        $stmt = $this->connection->prepare($query);

        foreach($object as $key => $val) {
            $stmt->bindValue(':' . $key, $val);
        }
        $stmt->execute();
        $stmt->debugDumpParams();

    }

    function delete($id) {
//        delete from tablename where id = 1
        $query = 'delete from ' . $this->table . ' where id = ' . $id;
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
    }



}