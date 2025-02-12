<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Projek;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $projek = Projek::count();
        $produk = Produk::count();
        return view('dashboard.index')->with(compact('projek', 'produk'));
    }
}
