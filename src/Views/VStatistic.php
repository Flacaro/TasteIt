<?php

namespace App\Views;

class VStatistic{
    public function visualizeStatistics($revenues, $numorders, $data)
    {
        return view("admin/statistics", [
            "revenues"=>$revenues,
            "numorders"=>$numorders,
            "data"=>$data
        ]);
    }


}