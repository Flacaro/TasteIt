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

    public function sendCoupon() {
        $fcustomer = new FCustomer();
        //aggiornare la quantità nella tabella customers_coupons
        $customersId = $_POST['customers'];
        $couponId = $_POST['couponId'];

        $fcustomer->sendCouponToTopTen($couponId, $customersId);

        redirect(url('showAllCustomers'));

    }

    public function showBest() {
        $vcustomer = new VCustomer();
        $fcoupon = new FCoupon();
        $fcustomers = new FCustomer();
        $previousMonth = date('m') - 1;
        return $vcustomer->showBest($fcoupon->getAll(), $fcustomers->topTenCustomersByTotal($previousMonth));
    }

}