<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TransaksiPenjualanModel;

class Penjualan extends Controller
{
    public function datapenjualan()
    {
        //variabel          tabel db
        $penjualan = DB::table('penjualan')->get();
        return view('datapenjualan')->with('penjualan',$penjualan);
            
    }

    public function addpenjualan(){
        return view('addpenjualan');
    }

    public function addProcess(Request $request)
    {
        DB::table('penjualan')->insert([
            //nama di db => nama di form inputan
            'kode_jual' =>$request->kode,
            'kode_brg' =>$request->kode,
            'nama_brg' =>$request->nama,
            'jumlah' =>$request->jumlah,
            'harga_jual' =>$request->harga_jual,
            'pembeli' =>$request->pembeli,
            'tanggal' =>$request->tanggal,
            'keterangan' =>$request->keterangan
        ]);
        return redirect('penjualan')->with('status','Data penjualan berhasil ditambahkan!');
    }
    
    public function editpenjualan($kode_jual)
    {
        $penjualan = DB::table('penjualan')->where('kode_jual',$kode_jual)->first();
        return view('editpenjualan', compact('penjualan'));
    }

    public function editProcess(Request $request, $kode_jual)
    {
        DB::table('penjualan')->where('kode_jual',$kode_jual)
            ->update([
            //nama di db => nama di form inputan
            'kode_jual' =>$request->kode,
            'kode_brg' =>$request->kode,
            'nama_brg' =>$request->nama,
            'jumlah' =>$request->jumlah,
            'harga_jual' =>$request->harga_jual,
            'pembeli' =>$request->pembeli,
            'tanggal' =>$request->tanggal,
            'keterangan' =>$request->keterangan
            ]);
        return redirect('penjualan')->with('status','Data penjualan berhasil diupdate!');
    }

    public function deletepenjualan($kode_jual)
    {
        DB::table('penjualan')->where('kode_jual',$kode_jual)->delete();
        return redirect('penjualan')->with('status','Data penjualan berhasil dihapus!');
    }
}
