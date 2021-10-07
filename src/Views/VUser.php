<?php

namespace App\Views;

class VUser {

    public function getUsers($users) {
        return view('user/user', [
            'users' => $users
        ]);
    }

    public function createUser($name, $surname) {
        return view("home",[
            'name' => $name,
            'surname' => $surname

        ]);
    }

    public function getProfile($customer, $orders) {
        return view('user/profile', [
            'id' => $customer->getId(),
            'name' => $customer->getName(),
            'surname' => $customer->getSurname(),
            'email' => $customer->getEmail(),
            'password' => $customer->getPassword(),
            'orders' => $orders
        ]);
    }

    public function getCartId($user) {
        return view('cart/cart', [
            'id' => $user->getId(),
            'cartId' => $user->getCartId(),
        ]);
    }
}