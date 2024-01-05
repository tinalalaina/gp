<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product1;
class Product1Controller extends Controller
{
    public function index(){
        $product1s = Product1::all();
        return view('product1s.index', ['product1s' => $product1s]);
    }
    public function create(){
        return view('product1s.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',   //   ici ca doit etre decimal fait une recherche 
            'description' => 'nullable'
        ]);
        $newProduct1 = Product1::create($data);
        return redirect(route('product1.index'));
    }
    public function edit(Product1 $product1){
        return view('product1s.edit', ['product1' => $product1]);
    }
    public function update(Product1 $product1, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $product1->update($data);

        return redirect(route('product1.index'))->with('success', 'Product1 Updated Succesffully');

    }
    public function destroy(Product1 $product1){
        $product1->delete();
        return redirect(route('product1.index'))->with('success', 'Product1 deleted Succesffully');
    }
}