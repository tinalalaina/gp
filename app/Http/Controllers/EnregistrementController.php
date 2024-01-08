<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product1;
use App\Models\Product2;

class EnregistrementController extends Controller
{
    public function index()
    {
        $product1s = Product1::all();
        $product2s = Product2::all();
        return view('enregistrements.index', compact('product1s', 'product2s'));
    }
}