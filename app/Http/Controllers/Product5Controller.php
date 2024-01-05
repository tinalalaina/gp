<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product5;
class Product5Controller extends Controller
{
    public function index(){
        $product5s = Product5::all();
        return view('product5s.index', ['product5s' => $product5s]);
    }
    public function create(){
        return view('product5s.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',   //   ici ca doit etre decimal fait une recherche 
            'description' => 'nullable'
        ]);
        $newProduct5 = Product5::create($data);
        return redirect(route('product5.index'));
    }
    public function edit(Product5 $product5){
        return view('product5s.edit', ['product5' => $product5]);
    }
    public function update(Product5 $product5, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $product5->update($data);

        return redirect(route('product5.index'))->with('success', 'Product5 Updated Succesffully');

    }
    public function destroy(Product5 $product5){
        $product5->delete();
        return redirect(route('product5.index'))->with('success', 'Product5 deleted Succesffully');
    }
}