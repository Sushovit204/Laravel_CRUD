<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home', ['products'=>$products]);
    }

    public function create(Request $request)
    {
        $Product = new Product;
        $Product->name = $request->name;
        $Product->description = $request->description;  
        $Product->save();
        return redirect(route('index'))->with('status', 'Product Added !');
    }

    public function edit($id)
    {
        $Product = Product::find($id);
        return view('editform', ['Product'=>$Product]);
    }


    public function update(Request $request, $id)
    {
        $Product = Product::find($id);
        $Product->name = $request->name;
        $Product->description = $request->description;  
        $Product->save();
        return redirect(route('index'))->with('status', 'Product Added !');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect(route('index'))->with('status', 'Product Deleted !!');

    }
}
