<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Projek;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $chartData = [];
        $chartLabels = [];
        $data = $this->grafis();


        $today = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime('-1 day'));
        foreach ($data as $record) {
            $formattedDate = date('d M Y', strtotime($record->visit_date));
            if ($record->visit_date == $today) {
                $chartLabels[] = "Hari Ini";
            } else if($record->visit_date == $yesterday){
                $chartLabels[] = "Kemarin";
            } else {
                $chartLabels[] = $formattedDate;
            }
            $chartData[] = $record->record_count;
        }

        $projek = Projek::count();
        $produk = Produk::count();
        return view('dashboard.index')->with(compact('projek', 'produk', 'chartLabels', 'chartData'));
    }

    public function grafis(){
        $startDate = Carbon::now()->subWeek(); // Tanggal mulai satu minggu yang lalu
        $endDate = Carbon::now(); // Tanggal sekarang
        $grafis = DB::table('log_pengunjungs') 
                        ->select(DB::raw('DATE(created_at) as visit_date'), DB::raw('COUNT(*) as record_count'))
                        ->whereDate('created_at', '>=', $startDate)
                        ->whereDate('created_at', '<=', $endDate)
                        ->whereTime('created_at', '>=', '00:00:00')
                        ->whereTime('created_at', '<=', '23:59:59')
                        ->groupBy('visit_date')
                        ->orderBy('visit_date', 'asc')
                        ->get();
        return $grafis;
    }
}
