<?php header('Content-type: text/html; charset=UTF-8');

require_once "vendor/autoload.php";
require_once "routes.php";
require_once "View.php";

use Pecee\SimpleRouter\SimpleRouter;

$smarty = new View();

$GLOBALS['smarty'] = $smarty;


SimpleRouter::setDefaultNamespace("\App\Controllers");

SimpleRouter::start(); 
