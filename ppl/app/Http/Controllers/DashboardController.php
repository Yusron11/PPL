<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $user_role = $request->session()->get('user_role');

        if ($user_role == 'pelanggan') {
            return view('dashboard.pelanggan');
        } elseif ($user_role == 'petani') {
            return view('dashboard.petani');
        }
        return redirect('/');
    }
}
