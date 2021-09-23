<?php

namespace App\Controllers\admin;

use App\Foundation\admin\FCoupon;
use App\Foundation\admin\FCustomer;
use App\Models\Coupon;
use App\Views\admin\VCustomer;

class CustomerController
{

    function index() {
        $vcustomer = new VCustomer();
        $fcustomer = new FCustomer();

        return $vcustomer->showAll($fcustomer->getAll());
    }

    //la tabella customers_coupons serve davvero? (Bisogna fare in modo che i coupon vengano effettivamente inviati)
    public function sendCoupon() {
        $fcustomer = new FCustomer();
        $fcoupon=new FCoupon;
        //aggiornare la quantità nella tabella customers_coupons
        $customersId = $_POST['customers'];
        $pricecut = $_POST['pricecut'];
        $expiration = $_POST['expiration'];
        foreach($customersId as $c){
            $coupon=new Coupon();
            $coupon->setPriceCut($pricecut);
            $coupon->setExpirationDate($expiration);
            $fcoupon->store($coupon);
            //print_r($c);
        }
        //$fcustomer->sendCouponToTopTen($couponId, $customersId);
        redirect(url('showAllCustomers'));

    }

    public function showBest() {
        $vcustomer = new VCustomer();
        $fcoupon = new FCoupon();
        $fcustomers = new FCustomer();
        $previousMonth = date('m') - 1;
        //print_r($fcustomers->topTenCustomersByTotal($previousMonth));
        return $vcustomer->showBest($fcoupon->getAll(), $fcustomers->topTenCustomersByTotal($previousMonth));
    }

}