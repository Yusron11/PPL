<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Helpers\Helper;

class ProductController extends Controller
{
    // public function index(){
    //     return view ('products', [
    //         "title" => "Produk",
    //         "products" => Product::with('user')->get()
    //     ]);
    // }
    public function index()
    {
        $products = Product::with('user')->get()->map(function ($product) {
            $product->price = Helper::harga($product->price);
            return $product;
        });
        
        return view ('products', [
            "title" => "Produk",
            "products" => $products
        ]);
    } 

    public function show(Product $product){
        $price = Helper::harga($product->price);
        return view ('product', [
            "title" => "Produk",
            "product" => $product,
            "price" => $price
        ]);
    }

}
