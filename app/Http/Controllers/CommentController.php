<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar_buku;

class CommentController extends Controller
{
    // Menampilkan semua komentar
    public function index()
    {
        $komentar = Komentar_buku::all();
        return view('Komentar_buku.index', ['komentar' => $komentar]);
    }

    // Menyimpan komentar baru
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'noktp' => 'required',
            'idbuku' => 'required',
            'komentar' => 'required',
        ]);

        // Simpan komentar ke database
        Komentar_buku::create([
            'noktp' => $request->noktp,
            'idbuku' => $request->idbuku,
            'komentar' => $request->komentar,
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil disimpan.');
    }

}
?>