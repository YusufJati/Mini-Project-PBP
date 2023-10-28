<?php

namespace App\Http\Controllers;

use App\Models\Detail_transaksi;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RiwayatController extends Controller
{
    // public function index(Detail_transaksi $detail_transaksi){
    //     $detail_transaksi -> load('get');
    //     return view('riwayat', ['detail_transaksi' => $detail_transaksi]);
    // }


    public function index(){
        $transaksi = Detail_transaksi::all();
        $transaksi->load('getBuku');
        
        // $peminjaman = Peminjaman::all();
        // $jatuhtempo = $peminjaman->tgl_transaksi->where('idtransaksi', $transaksi->idtransksi);

        return view("dashboard.anggota.riwayat",[
            'transaksi' => $transaksi,
            'jatuhTempo'=> $jatuhtempo]);
    }

    

}
