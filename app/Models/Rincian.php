<?php

namespace App\Models;

use App\Models\Barang;
use App\Models\Pembeli;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rincian extends Model
{
    use HasFactory;

    protected $table = 'rincian_pembelian';
    protected $guarded = ['id'];

    public function Barang(){
        return $this->hasOne(Barang::class, 'id_jenis', 'jenis_barang');
    }

    public function Pembeli(){
        return $this->belongsTo(Pembeli::class, 'kode_pembelian', 'kode_pembelian');
    }

}
