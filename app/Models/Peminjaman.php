<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $primaryKey = 'idtransaki';

    public function getDetailTransaksi() {
        return $this->hasOne(Detail_transaksi::class, 'idtransaksi', 'idtransaksi');
    }
}
