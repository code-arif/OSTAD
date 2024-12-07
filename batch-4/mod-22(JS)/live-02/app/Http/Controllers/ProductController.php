<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // return view('alpine.product', ['products' => $products]);
        return response()->json($products);
    }

    public function index2()
    {
        $products = Product::all();
        return view('alpine.product2', ['products' => $products]);
    }

    //product create
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);
        $product = Product::create($validated);
        return response()->json(['message' => 'Product created successfully', 'product' => $product], 201);
    }

    //product delete
    public function delete(Request $request)
    {
        $product = Product::find($request->id);
        if ($product) {
            $product->delete();
            return response()->json(['message' => 'Product deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }
    //update product
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);
        $product = Product::find($request->id);
        if ($product) {
            $product->update($validated);
            return response()->json(['message' => 'Product updated successfully', 'product' => $product], 200);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }
}
