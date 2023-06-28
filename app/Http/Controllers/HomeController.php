<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        // $admin = DB::table('users')->where('email', '=', 'admin@mail.com')->get();
        // $admin->assignRole('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = auth()->user();
        // $user = User::with('roles')->get();
        // $user->assignRole('user');
        // return $user;
        $bangunan = Produk::where('kategori', '=', 'bangunan')->count();
        $kayu = Produk::where('kategori', '=', 'kayu')->count();

        // return '$kayu';
        return view('pages.dashboard', compact('bangunan', 'kayu'));
    }
}
