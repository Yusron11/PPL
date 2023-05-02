<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user_role = $request->session()->get('user_role');

        if ($user_role == 'pelanggan') {
            return view('dashboard.pelanggan.product.index',[
                "products" => Product::with('user')->get()
            ]);
        } elseif ($user_role == 'petani') {
            return view('dashboard.petani.product.index',[
                "products" => Product::where('user_id', auth()->user()->id)->get()
            ]);
        }
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // return $product;

        $user_role = session('user_role');
        if ($user_role == 'pelanggan') {
            return view('dashboard.pelanggan.product.show',[
                "product" => $product
            ]);
        } elseif ($user_role == 'petani') {
            return view('dashboard.petani.product.show',[
                "product" => $product
            ]);
        }
        return redirect('/');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
