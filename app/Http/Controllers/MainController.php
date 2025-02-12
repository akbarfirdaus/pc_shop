<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\Projek;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome', [
            'projeks' => Projek::latest()->get()
        ]);
    }
}
