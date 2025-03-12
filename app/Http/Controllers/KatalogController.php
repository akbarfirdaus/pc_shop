<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\LogPengunjung;
use App\Models\Produk;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index(Request $request)
    {
        // Cek apakah cookie sudah ada
        if (!$request->cookie('visitor_id')) {
            $visitorId = uniqid(); // Buat ID unik
            $response = response()->json(['message' => 'New visitor']);
            $response->cookie('visitor_id', $visitorId, 1440); // 1440 menit = 1 hari
            return $response;
        } else {
            $visitorId = $request->cookie('visitor_id');
        }

        // Cek apakah sudah tercatat hari ini
        $check = LogPengunjung::where('visitor_session', $visitorId)
            ->whereDate('created_at', now()->toDateString())
            ->first();

        if (!$check) {
            LogPengunjung::create(['visitor_session' => $visitorId]);
        }
        return view('katalog', [
            'kategoris' => Kategori::all(),
            'produks' => Produk::all()
        ]);
    }

    public function show($slug, Request $request)
    {
        $produk = Produk::where('slug', $slug)->firstOrFail();
        // Cek apakah cookie sudah ada
        if (!$request->cookie('visitor_id')) {
            $visitorId = uniqid(); // Buat ID unik
            $response = response()->json(['message' => 'New visitor']);
            $response->cookie('visitor_id', $visitorId, 1440); // 1440 menit = 1 hari
            return $response;
        } else {
            $visitorId = $request->cookie('visitor_id');
        }

        // Cek apakah sudah tercatat hari ini
        $check = LogPengunjung::where('visitor_session', $visitorId)
            ->whereDate('created_at', now()->toDateString())
            ->first();

        if (!$check) {
            LogPengunjung::create(['visitor_session' => $visitorId]);
        }
        return view('product', compact('produk'));
    }
}
