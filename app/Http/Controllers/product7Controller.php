<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product7;
class product7Controller extends Controller
{
    public function index(){
        $product7s = Product7::all();
        return view('product7s.index', ['product7s' => $product7s]);
    }
    public function create(){
        return view('product7s.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',   //   ici ca doit etre decimal fait une recherche 
            'description' => 'nullable'
        ]);
        $newproduct7 = Product7::create($data);
        return redirect(route('Product7.index'));
    }
    public function edit(Product7 $Product7){
        return view('product7s.edit', ['Product7' => $Product7]);
    }
    public function update(Product7 $Product7, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $Product7->update($data);

        return redirect(route('Product7.index'))->with('success', 'Product7 Updated Succesffully');

    }
    public function destroy(Product7 $Product7){
        $Product7->delete();
        return redirect(route('Product7.index'))->with('success', 'Product7 deleted Succesffully');
    }
}