<?php

    namespace App\Http\Controllers\Anggota;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class bukuController extends Controller
    {
        public function _invoke(Request $request)
        {
            return view('Anggota.buku');
        }
    }

?>