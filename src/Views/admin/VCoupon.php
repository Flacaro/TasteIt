<?php

namespace App\Views\admin;

class VCoupon
{

    public function showAll($coupons)
    {
        return view("admin/coupons/coupons", [
            'coupons' => $coupons
        ]);
    }

    public function createCoupon($message = '') {
        return view("admin/coupons/create", [
            'message' => $message
        ]);
    }

}