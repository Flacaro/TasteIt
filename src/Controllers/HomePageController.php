<?php

namespace App\Controllers;

class HomePageController
{
    //servirà a caricare tutti i dati nella home: categorie, best sellers ecc
 public function homeData($categories, $bestSellers){

 }
 public function visualizeHome(){
     return view('home', [
     ]);
 }
    public function About(){
        return view('aboutUs', [

        ]);
    }
}