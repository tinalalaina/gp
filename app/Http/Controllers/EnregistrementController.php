<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product1;
use App\Models\Product2;
use App\Models\Product3;
use App\Models\Product4;
use App\Models\Product5;
use App\Models\Product6;
use App\Models\Product7;
use App\Models\Product8;
use App\Models\Product9;

class EnregistrementController extends Controller
{
    public function index()
    {
        $product1s = Product1::all();
        $product2s = Product2::all();
        $product3s = Product3::all();
        $product4s = Product4::all();
        $product5s = Product5::all();
        $product6s = Product6::all();
        $product7s = Product7::all();
        $product8s = Product8::all();
        $product9s = Product9::all();
        
        return view('enregistrements.index', compact('product1s', 'product2s','product3s','product4s','product5s','product6s','product7s','product8s','product9s',));
    }
}