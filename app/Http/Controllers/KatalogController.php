<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        return view('katalog', [
            'kategoris' => Kategori::all(),
            'produks' => Produk::all()
        ]);
    }

    public function show($slug)
    {
        $produk = Produk::where('slug', $slug)->firstOrFail();
        return view('product', compact('produk'));
    }
}
