<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product4;
class Product4Controller extends Controller
{
    public function index(){
        $product4s = Product4::all();
        return view('product4s.index', ['product4s' => $product4s]);
    }
    public function create(){
        return view('product4s.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',   //   ici ca doit etre decimal fait une recherche 
            'description' => 'nullable'
        ]);
        $newProduct4 = Product4::create($data);
        return redirect(route('product4.index'));
    }
    public function edit(Product4 $product4){
        return view('product4s.edit', ['product4' => $product4]);
    }
    public function update(Product4 $product4, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $product4->update($data);

        return redirect(route('product4.index'))->with('success', 'Product4 Updated Succesffully');

    }
    public function destroy(Product4 $product4){
        $product4->delete();
        return redirect(route('product4.index'))->with('success', 'Product4 deleted Succesffully');
    }
}