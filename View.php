<?php

use App\Foundation\FCategory;

// https://www.smarty.net/docs/en/installing.smarty.extended.tpl
class View extends Smarty {

    public function __construct() {
        parent::__construct();

        $this->setTemplateDir('/src/templates/');
        $this->setCompileDir('src/Views/');
        $this->setConfigDir('src/smarty_configs/');
        $this->setCacheDir('src/smarty_cache/');

        $FCategories = new FCategory();
        $this->assign('categories', $FCategories->getAll());
    }

}

function view($templateFile, $data = [] ) {
    $smarty = $GLOBALS['smarty'];
    $templatePath = 'src/templates/';

    if(sizeof($data) > 0) {
        foreach($data as $key => $val) {
            $smarty->assign($key, $val);
        }
    }

    return $smarty->display($templatePath . $templateFile . '.tpl');
}