<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LogPengunjung;
use App\Models\Projek;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $projeks = Projek::all();

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

        return view("welcome", compact("projeks"));
    }
}
