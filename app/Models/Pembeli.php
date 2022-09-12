<?php

namespace App\Models;

use App\Models\Rincian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembeli extends Model
{
    use HasFactory;

    protected $table = 'pembeli';
    protected $guarded = ['id'];

    public function Rincian(){
        return $this->hasMany(Rincian::class, 'kode_pembelian', 'kode_pembelian');
    }

    static public function getTransaksi(){
    $q = Pembeli::all();

    return $q;
    }
}
