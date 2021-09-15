<?php

namespace App\Foundation;

class FPersistentManager
{
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new FPersistentManager();
        }

        return self::$instance;
    }

    public function exist(string $foundation, $key) : bool {
        $ris = $foundation::exist($key);
        return $ris;
    }


    public function load(string $foundation, $key) {
        $object = $foundation::load($key);
        return $object;
    }

    public function store(object $obj) : bool {
        $model = get_class($obj);
        $foundation = "F".$model;
        $ris = $foundation::store($obj);
        return $ris;
    }

    public function update(object $obj) : bool {
        $model = get_class($obj);
        $Fclass = "F".$model;
        $ris = $Fclass::update($obj);
        return $ris;
    }

    public function delete(string $foundation, $key) : bool {
        $ris = $foundation::delete($key);
        return $ris;
    }

    public function getAll(string $foundation){
        $ris = $foundation::getAll();
        return $ris;
    }

}