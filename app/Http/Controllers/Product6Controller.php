<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product6;
class Product6Controller extends Controller
{
    public function index(){
        $product6s = Product6::all();
        return view('product6s.index', ['product6s' => $product6s]);
    }
    public function create(){
        return view('product6s.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',   //   ici ca doit etre decimal fait une recherche 
            'description' => 'nullable'
        ]);
        $newProduct6 = Product6::create($data);
        return redirect(route('product6.index'));
    }
    public function edit(Product6 $product6){
        return view('product6s.edit', ['product6' => $product6]);
    }
    public function update(Product6 $product6, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $product6->update($data);

        return redirect(route('product6.index'))->with('success', 'Product6 Updated Succesffully');

    }
    public function destroy(Product6 $product6){
        $product6->delete();
        return redirect(route('product6.index'))->with('success', 'Product6 deleted Succesffully');
    }
}