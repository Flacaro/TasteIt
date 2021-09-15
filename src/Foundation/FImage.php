<?php

namespace App\Foundation;

class FImage extends FConnection{

    function __construct()
    {
        parent::__construct('images', 'Image');
    }
}
