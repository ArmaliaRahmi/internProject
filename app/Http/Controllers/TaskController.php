<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        // mengambil data dari table task
        $task = DB::table('task')->get();

        // mengirim data task ke view index
        return view('task',['task' => $task]);
    }
// method untuk menampilkan view form add task
    public function addtask(){
        return view('addtask');
    }
// method untuk insert data ke table tbl_siswa
    public function store(Request $request)
    {
        // insert data ke table tbl_siswa
        DB::table('task')->insert([
            'clientName' => $request->clientName,
            'taskttl' => $request->tasskTtl,
            'taskDesc' => $request->taskDesc,
            'dueDate' => $request->dueDate,
            'statusTask' => $request->statusTask]
        );

        // alihkan halaman ke halaman siswa
        return redirect('/task');
    }
}