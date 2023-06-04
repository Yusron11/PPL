<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.admin.pesanan', [
            "orders" => Order::all(),
            "role" => $request->session()->get('user_role'),
            "title" => "Pesanan"
        ]);
    }

    public function update( Order $order)
    {
       $terbayar['status'] = 'DALAM PROSES';

        Order::where('id', $order->id)
            ->update($terbayar);

        return redirect('/dashboard/pesanan')->with('success', 'Status pesanan berhasil diperbarui');

    }
}
