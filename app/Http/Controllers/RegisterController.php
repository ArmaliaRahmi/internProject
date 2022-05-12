<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
    	// mengambil data dari table users
    	$pegawai = DB::table('users')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['users' => $users]);
 
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('users')->insert([
            'picName' => $request->picName,
            'compName' => $request->compName,
            'email' => $request->email,
            'serviceGroup' => $request->serviceGroup,
            'serviceShare' => $request->serviceShare,
            'password' => $request->password,
            'whatsapp' => $request->whatsapp,
            'slack' => $request->slack,
            'telegram' => $request->telegram,
            'coster' => $request->coster,
            'customchannel' => $request->custumchannel,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/login');
    
    }
}
