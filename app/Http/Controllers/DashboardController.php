<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;

class DashboardController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $buku = Buku::all();
        return view('dashboard', ['buku' => $buku, 'kategori' => $kategori]);
    }
}
