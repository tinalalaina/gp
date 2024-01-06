<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product9;
class Product9Controller extends Controller
{
    public function index(){
        $product9s = Product9::all();
        return view('product9s.index', ['product9s' => $product9s]);
    }
    public function create(){
        return view('product9s.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'firstname' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',   //   ici ca doit etre decimal fait une recherche 
            'description' => 'nullable'
        ]);
        $newProduct9 = Product9::create($data);
        return redirect(route('product9.index'));
    }
    public function edit(Product9 $product9){
        return view('product9s.edit', ['product9' => $product9]);
    }
    public function update(Product9 $product9, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'firstname' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $product9->update($data);

        return redirect(route('product9.index'))->with('success', 'Product9 Updated Succesffully');

    }
    public function destroy(Product9 $product9){
        $product9->delete();
        return redirect(route('product9.index'))->with('success', 'Product9 deleted Succesffully');
    }
}