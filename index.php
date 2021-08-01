<?php

require_once "vendor/autoload.php";
require_once "routes.php";

use Pecee\SimpleRouter\SimpleRouter;

$smarty = new Smarty();


$smarty->setTemplateDir('src/templates/');
$smarty->setCompileDir('src/Views/');
$GLOBALS['smarty'] = $smarty;


SimpleRouter::setDefaultNamespace("\App\Controllers");

SimpleRouter::start(); 
