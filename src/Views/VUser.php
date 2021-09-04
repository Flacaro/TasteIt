<?php

namespace App\Views;

class VUser {

    public function getUsers($users) {
        return view('user/user', [
            'users' => $users
        ]);
    }

    /*public function createUser() {
        return view("home",[

        ]);
    }*/

    public function editUser($user) {
        return view('user/user-update', [
            'id' => $user->getId(),
            'name' => $user->getName(),
            'surname' => $user->getSurname(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'cartId' => $user->getCartId()
        ]);
    }

    public function getCartId($user) {
        return view('cart/cart', [
            'id' => $user->getId(),
            'cartId' => $user->getCartId(),
        ]);
    }
}