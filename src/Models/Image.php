<?php

namespace App\Models;

class Image
{
    private $id;
    private $imagePath;

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
        return $this->imagePath;
    }

    public function setImagePath($image): void
    {
        $this->imagePath = $image;
    }

}