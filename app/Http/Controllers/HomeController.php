<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $bangunan = Produk::where('kategori', '=', 'bangunan')->count();
        $kayu = Produk::where('kategori', '=', 'kayu')->count();

        return view('pages.dashboard', compact('bangunan', 'kayu'));
    }
}
