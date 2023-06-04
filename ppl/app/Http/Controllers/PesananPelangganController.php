<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Helpers\Helper;

class PesananPelangganController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.pelanggan.pesanan', [
            "orders" => Order::where('user_id', auth()->user()->id)->get(),
            "role" => $request->session()->get('user_role'),
            "title" => "Pesanan"
        ]);
    }

    public function show(Product $product)
    {
        $price = Helper::harga($product->price);
        return view('pesan',[
            "title" => "Pesan",
            "product" => $product,
            "price" => $price
        ]);
    }

    public function store(Request $request, $slug){
        $validatedData = $request->validate([
            'jumlah' => 'required|numeric',
            'alamat' => 'required',
            'nama' => 'required',
            'telepon' => 'required'
        ]);
    
        $product = Product::where('slug', $slug)->firstOrFail();
        $product_id = $product->id;

    
        if ($product->stok < $validatedData['jumlah']) {
            return response()->json(['message' => 'Stok produk tidak mencukupi'], 400);
        }
    
        $total_harga = $validatedData['jumlah'] * $product->price;
    
        $orderData = [
            'jumlah' => $validatedData['jumlah'],
            'alamat' => $validatedData['alamat'],
            'nama_pemesan' => $validatedData['nama'],
            'telepon' => $validatedData['telepon'],
            'total_harga' => $total_harga,
            'product_id' => $product_id,
            'user_id' => auth()->user()->id,
        ];
    
        try {
            Order::create($orderData);
            $newOrder = Order::latest()->first();
            $product->update([
                'stok' => $product->stok - $validatedData['jumlah'],
            ]);
            return redirect('/bayar/' . $newOrder->id)->with('success', 'Produk baru berhasil ditambahkan');

        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['msg' => 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.']);
        }
    }

    public function bayar(Order $order)
    {
        return view('bayar',[
            "title" => "Pesan",
            "order" => $order,
        ]);
    }

    public function batal(Order $order)
    {
        Order::destroy($order->id);
        return redirect('/dashboard/myorder')->with('success', 'Produk berhasil dihapus');
    }

}
