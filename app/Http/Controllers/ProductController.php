<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Models\Product;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function show(Request $request)
    {
        $productId = $request->query('id');
        $productName = $request->query('name');
        $productPrice = $request->query('price');
        $productImage = $request->query('image');

        // Pass the product details to the view
        return view('product', compact('productId', 'productName', 'productPrice', 'productImage'));
    }
}
