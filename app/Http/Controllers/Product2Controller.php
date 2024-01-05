<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product2;
class Product2Controller extends Controller
{
    public function index(){
        $product2s = Product2::all();
        return view('product2s.index', ['product2s' => $product2s]);
    }
    public function create(){
        return view('product2s.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',   //   ici ca doit etre decimal fait une recherche 
            'description' => 'nullable'
        ]);
        $newProduct2 = Product2::create($data);
        return redirect(route('product2.index'));
    }
    public function edit(Product2 $product2){
        return view('product2s.edit', ['product2' => $product2]);
    }
    public function update(Product2 $product2, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $product2->update($data);

        return redirect(route('product2.index'))->with('success', 'Product2 Updated Succesffully');

    }
    public function destroy(Product2 $product2){
        $product2->delete();
        return redirect(route('product2.index'))->with('success', 'Product2 deleted Succesffully');
    }
}