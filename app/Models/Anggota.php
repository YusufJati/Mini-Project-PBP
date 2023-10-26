<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $primaryKey = 'noktp';

    public function getRatingAnggota() {
        return $this->hasOne(Rating_buku::class, 'noktp', 'noktp');
    }

}
