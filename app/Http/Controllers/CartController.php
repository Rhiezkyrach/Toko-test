<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Rincian;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('cart',[
            'barang' => Barang::all()
        ]);
    }

    public function post(Request $request){
        $validatedData = $request->validate([
            'nama_pembeli' => 'required',
            'total_belanja' => 'required',
            'dibayar' => 'required',
            'kembalian' => 'required',
        ]);

        $kode = $validatedData['kode_pembelian'] = $request->nama_pembeli . \Carbon\Carbon::now()->translatedFormat('dmY-His');
        $validatedData['total'] = $request->total_belanja;

        // Table Rincian
        $i = 0;
        foreach($request->jenis_barang as $nb) {

            // $data['nama_barang'] = $nb;
            $data['kode_pembelian'] = $kode;
            $data['jenis_barang'] = $nb;
            
            Rincian::create($data);
            $i++;
        }

        Pembeli::create($validatedData);

        return redirect('/')->with('success', 'Transaksi Berhasil!');
    }

    public function transaksi(){
        return view('transaksi',[
            'transaksi' => Pembeli::getTransaksi(),
        ]);
    }
}
