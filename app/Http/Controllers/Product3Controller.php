<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product3;
class Product3Controller extends Controller
{
    public function index(){
        $product3s = Product3::all();
        return view('product3s.index', ['product3s' => $product3s]);
    }
    public function create(){
        return view('product3s.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',   //   ici ca doit etre decimal fait une recherche 
            'description' => 'nullable'
        ]);
        $newProduct3 = Product3::create($data);
        return redirect(route('product3.index'));
    }
    public function edit(Product3 $product3){
        return view('product3s.edit', ['product3' => $product3]);
    }
    public function update(Product3 $product3, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $product3->update($data);

        return redirect(route('product3.index'))->with('success', 'Product3 Updated Succesffully');

    }
    public function destroy(Product3 $product3){
        $product3->delete();
        return redirect(route('product3.index'))->with('success', 'Product3 deleted Succesffully');
    }
}