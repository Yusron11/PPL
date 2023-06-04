<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Helpers\Helper;
use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.petani.product.index',[
            "products" => Product::where('user_id', auth()->user()->id)->get(),
            "title" => "Produk",
            "role" => "petani"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.petani.product.create', [
            "title" => "Produk",
            "role" => "petani"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidatedData = $request -> validate ([
            'name' => 'required|max:255',
            'price' => 'required',
            'stok' => 'required',
            'description' => 'required'
        ]);

        $ValidatedData['user_id'] = auth()->user()->id;

        Product::create($ValidatedData);
        return redirect('/dashboard/product')->with('success', 'Produk baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $price = Helper::harga($product->price);
        return view('dashboard.petani.product.show',[
            "product" => $product,
            "price" => $price,
            "title" => "Produk",
            "role" => "petani"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashboard.petani.product.edit', [
            'product' => $product,
            "title" => "Produk",
            "role" => "petani"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $ValidatedData = $request -> validate ([
            'name' => 'required|max:255',
            'price' => 'required',
            'stok' => 'required',
            'description' => 'required'
        ]);

        $ValidatedData['user_id'] = auth()->user()->id;

        Product::where('id', $product->id)
            ->update($ValidatedData);

        return redirect('/dashboard/product')->with('success', 'Produk berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/dashboard/product')->with('success', 'Produk berhasil dihapus');
    }
}
