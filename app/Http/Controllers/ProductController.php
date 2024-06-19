<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {


    public function index(){
        $products = Product::all();

        return response()->json($products);
    }

    public function show($id){
        $product = Product::find($id);
        return response()->json($product);
    }

    public function create(Request $request){

        $product = Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'category'=>$request->category,
        ]);

        dump($product);

        return response()->json($product, 201);
    }

    public function update(Request $request, $id){

        $product = Product::find($id);

        $product->name = $request->name;
        $product->name = $request->name;
        $product->name = $request->name;

        $product->save();

        return response()->json($product);
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();

        return response()->json('Product delete successfully');
    }

}