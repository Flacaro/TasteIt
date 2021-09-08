<?php

namespace App\Controllers\admin;

use App\Foundation\admin\FCoupon;
use App\Foundation\FRestaurant;
use App\Models\Coupon;
use App\Views\admin\VCoupon;
use App\Views\VStatistic;

class CouponController
{
    // mostra la lista di tutti gli coupon [GET /coupons]
    function index() {
        $vcoupon = new VCoupon();
        $coupons = new FCoupon();

        $vcoupon->showAll($coupons->getAll());
    }

    // il form viene inviato a questo metodo [POST /coupons]
    function store() {
        $vcoupon = new VCoupon();
        $fcoupon = new FCoupon();

        $isValid = validate($_POST, [
            'price_cut' => ['isPositive']
        ]);
        if(!$isValid) {
            return $vcoupon->createCoupon('Lo sconto non è valido');
        } else {
            // quando e' valido
            $coupon = new Coupon();
            $coupon->setPriceCut($_POST['price_cut']);
            $fcoupon->create($coupon);

            redirect(url('showAllCoupons'));
        }
    }

    // ti restituisce la vista per la creazione di un coupon  [GET /coupons/create]
    function create() {
        $vcoupon = new VCoupon();
        $vcoupon->createCoupon();
    }


}