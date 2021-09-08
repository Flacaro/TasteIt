<?php

namespace App\Controllers\admin;

use App\Foundation\admin\FCoupon;
use App\Foundation\admin\FCustomer;
use App\Views\admin\VCustomer;

class CustomerController
{

    function index() {
        $vcustomer = new VCustomer();
        $fcustomer = new FCustomer();

        return $vcustomer->showAll($fcustomer->getAll());
    }

    public function test() {
        $fcustomer = new FCustomer();

        $customersId = $_POST['customers'];
        $couponId = $_POST['couponId'];

        $fcustomer->sendCouponToTopTen($couponId, $customersId);

        redirect(url('showAllCustomers'));

    }

    public function showBest() {
        $vcustomer = new VCustomer();
        $fcoupon = new FCoupon();
        $fcustomers = new FCustomer();

        return $vcustomer->showBest($fcoupon->getAll(), $fcustomers->topTenCustomersByTotal());
    }

}