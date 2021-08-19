<?php

namespace App\Models;

class Image
{
    public $id;
    public $image;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getImagePath()
    {
        return $this->image;
    }

    public function setImagePath($image): void
    {
        $this->image = $image;
    }

}