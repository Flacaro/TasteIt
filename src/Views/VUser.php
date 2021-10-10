<?php

namespace App\Views;

class VUser {

    public function getOrderDetails($products){
        $data=[
            "products"=>$products
        ];
        setData("user/orders-details", $data);
    }

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
        $data = [
            'id' => $customer->getId(),
            'name' => $customer->getName(),
            'surname' => $customer->getSurname(),
            'email' => $customer->getEmail(),
            'password' => $customer->getPassword(),
            'orders' => $orders
        ];
        return setData('user/profile', $data);
    }

    public function getCartId($user) {
        return view('cart/cart', [
            'id' => $user->getId(),
            'cartId' => $user->getCartId(),
        ]);
    }
}