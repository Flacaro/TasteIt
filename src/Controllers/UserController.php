<?php


namespace App\Controllers;
use App\Foundation\FUser;
use App\Models\User;
use Pecee\SimpleRouter\SimpleRouter;

class UserController {

    public function index() {
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
    }

    public function update($id) {
        $FUser = new FUser();
        $user = new User();
        $id = $_POST['id'];
        $password = $_POST['password'];
        $user->setPassword($password);
        $FUser->update($id,$user);
    }
    public function edit($id) {
        $FUsers = new FUser();
        $user = $FUsers->getById($id);
        $smarty = $GLOBALS['smarty'];
        $smarty->assign('id', $id);
        $smarty->assign('password', $user->getPassword());
        return $smarty->display('src/templates/user-update.tpl');
    }
}