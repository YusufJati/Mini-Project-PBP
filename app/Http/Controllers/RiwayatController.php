<?php

namespace App\Http\Controllers;

use App\Models\Detail_transaksi;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class RiwayatController extends Controller
{
    // public function index(Detail_transaksi $detail_transaksi){
    //     $detail_transaksi -> load('get');
    //     return view('riwayat', ['detail_transaksi' => $detail_transaksi]);
    // }


    public function index(){
        $transaksi = Detail_transaksi::all();
        $transaksi->load('getBuku');
        
   

        $peminjaman = Peminjaman::join('detail_transaksi','peminjaman.idtransaksi','=','detail_transaksi.idtransaksi')->select('peminjaman.*','detail_transaksi.*')->whereNull('tgl_kembali')->get();
        $peminjaman->load('getDetailTransaksi');

        $terlambat = Peminjaman::join('detail_transaksi','peminjaman.idtransaksi','=','detail_transaksi.idtransaksi')->select('peminjaman.*','detail_transaksi.*')->whereRaw('DATEDIFF(detail_transaksi.tgl_kembali, peminjaman.tgl_pinjam) > 7')->get();



        return view("dashboard.anggota.riwayat",[
            'transaksi' => $transaksi,
            'peminjaman'=> $peminjaman,
            'terlambat' => $terlambat
        ]);
    }

    

}
