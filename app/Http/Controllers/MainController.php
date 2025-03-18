<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LogPengunjung;
use App\Models\Projek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $projeks = Projek::all();

        if (!$request->cookie('visitor_id')) {
            $visitorId = uniqid(); // Buat ID unik

            // Buat cookie
            $cookie = Cookie::make('visitor_id', $visitorId, 1440);

            // Redirect ke halaman utama dengan cookie (agar tidak mengembalikan response kosong)
            return redirect()->route('main')->withCookie($cookie);
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
