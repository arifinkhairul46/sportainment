<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Lapangan;
use App\Models\Sesi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $artikel_show = Artikel::all();
        $list_lapangan = Lapangan::all();
        $sesi = Sesi::all();


        return view('index', compact('artikel_show', 'list_lapangan', 'sesi'));
    }

    public function generate_id_booking() {
        $today = date('Ymd');
        

    }

    public function addToCart (){
        

    }
}
