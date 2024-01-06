<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product8;
class Product8Controller extends Controller
{
    public function index(){
        $product8s = Product8::all();
        return view('product8s.index', ['product8s' => $product8s]);
    }
    public function create(){
        return view('product8s.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',   //   ici ca doit etre decimal fait une recherche 
            'description' => 'nullable'
        ]);
        $newProduct8 = Product8::create($data);
        return redirect(route('product8.index'));
    }
    public function edit(Product8 $product8){
        return view('product8s.edit', ['product8' => $product8]);
    }
    public function update(Product8 $product8, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $product8->update($data);

        return redirect(route('product8.index'))->with('success', 'Product8 Updated Succesffully');

    }
    public function destroy(Product8 $product8){
        $product8->delete();
        return redirect(route('product8.index'))->with('success', 'Product8 deleted Succesffully');
    }
}