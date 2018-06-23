<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return response()->json($products);
		
    }
    public function store(Request $request)
    {    	
		$product = new Product();
		$product->fill($request->all());
		$product->price = (int)$request->price;
		$product->sale_price = (int)$request->sale_price;
        $product->save();
        return response()->json($product);
    }
    public function show($id)
    {
        $product = Product::find($id);
        if(!$product) {
            return response()->json([
                'message'   => 'produto nao encontrado',
            ], 404);
        }

        return response()->json($product);
    }
    public function destroy($id)
    {
        $product = Product::find($id);

        if(!$product) {
            return response()->json([
                'message'   => 'produto nao encontrado',
            ], 404);
        }

        $product->delete();
        return response()->json([
            'message'   => 'produto excluido',
        ], 200);
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if(!$product) {
            return response()->json([
                'message'   => 'produto nao encontrado',
            ], 404);
        }
		
        $product->fill($request->all());
		$product->price = (int)$request->price;
		$product->sale_price = (int)$request->sale_price;
        $product->save();
		
        return response()->json($product);
		
    }
}
