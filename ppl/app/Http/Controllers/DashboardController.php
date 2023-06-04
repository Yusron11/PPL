<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Helpers\Helper;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $user_role = $request->session()->get('user_role');
        $products = Product::with('user')->get()->map(function ($product) {
            $product->price = Helper::harga($product->price);
            return $product;
        });
        if ($user_role == 'pelanggan') {
            return view('dashboard.pelanggan',[
                "title" => "Dasboard",
                "products" => $products,
                "role" => $user_role
            ]);
        } 
        elseif ($user_role == 'petani'){
            return view('dashboard.petani', [
                "title" => "Dasboard",
                "products" => $products,
                "role" => $user_role
            ]);
        }
        elseif ($user_role == 'admin'){
            return view('dashboard.admin',[
                "title" => "Dasboard",
                "products" => $products,
                "role" => $user_role
            ]);
        }
        return redirect('/');
    }
}
