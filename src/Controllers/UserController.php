<?php


namespace App\Controllers;
use App\Foundation\FUser;
use App\Models\User;
use Pecee\SimpleRouter\SimpleRouter;

class UserController {

    public function getAll() {
        $fusers = new FUser();
        $users = $fusers->getAll();
        $smarty = $GLOBALS['smarty'];
        $smarty->assign('users', $users);
        return $smarty->display('src/templates/user.tpl');
    }
    public function create() {
        $fusers = new FUsers();
        $user = new User();
        $user->setId(NULL);
        $user->setName('Bob');
        $user->setSurname('Bobby');
        $user->setEmail("ciccio@gmail.com");
        $user->setPassword('ciao');
        $fusers->create($user);
        response()->redirect('/users');
    }
}