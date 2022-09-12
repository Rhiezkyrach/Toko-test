<?php

namespace App\Models;

use App\Models\Rincian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'jenis_barang';
    protected $primary_key = ['id_jenis'];

    public function Rincian(){
        return $this->hasOne(Rincian::class, 'id_jenis', 'jenis_barang');
    }
}
