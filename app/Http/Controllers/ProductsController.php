<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        // mengambil data dari table task
        $products = DB::table('products')->get();

        // mengirim data task ke view index
        return view('products',['products' => $products]);
    }
}