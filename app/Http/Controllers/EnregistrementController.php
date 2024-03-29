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
    
public function index(Request $request)
{
    $product1s =  Product1::where('name', 'like', '%' . $request->input('searchNom', '') . '%')->get();
    $product2s =  Product2::where('name', 'like', '%' . $request->input('searchNom', '') . '%')->get();
    $product3s =  Product3::where('name', 'like', '%' . $request->input('searchNom', '') . '%')->get();
    $product4s =  Product4::where('name', 'like', '%' . $request->input('searchNom', '') . '%')->get();
    $product5s =  Product5::where('name', 'like', '%' . $request->input('searchNom', '') . '%')->get();
    $product6s =  Product6::where('name', 'like', '%' . $request->input('searchNom', '') . '%')->get();
    $product7s =  Product7::where('name', 'like', '%' . $request->input('searchNom', '') . '%')->get();
    $product8s =  Product8::where('name', 'like', '%' . $request->input('searchNom', '') . '%')->get();
    $product9s =  Product9::where('name', 'like', '%' . $request->input('searchNom', '') . '%')->get();

    return view('enregistrements.index', compact('product1s', 'product2s','product3s','product4s','product5s','product6s','product7s','product8s','product9s'));
}
}