<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BroadcastController extends Controller
{
    public function index()
    {
        // mengambil data dari table task
        $broadcast = DB::table('broadcast')->get();

        // mengirim data task ke view index
        return view('broadcast',['broadcast' => $broadcast]);
    }
}
