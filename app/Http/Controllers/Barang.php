<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Models\BarangModel;

class Barang extends Controller
{
    public function databarang()
    {
        //variabel          tabel db
        $barang = DB::table('barang')->get();
        return view('databarang')->with('barang',$barang);
        //return $barang;
        //return view('data');
        
        //return view('data',['barang'=>$barang]);
        //cara lain
        //return view('data', compact('barang'));
        
    }

    public function addbarang(){
        return view('addbarang');
    }

    public function addProcess(Request $request)
    {
        DB::table('barang')->insert([
            //nama di db => nama di form inputan
            'kode_brg' =>$request->kode,
            'nama_brg' =>$request->nama,
            'satuan' =>$request->satuan,
            'harga_beli' =>$request->harga_beli,
            'harga_jual' =>$request->harga_jual,
            'jumlah' =>$request->jumlah,
            'diskon' =>$request->diskon
        ]);
        return redirect('barang')->with('status','Data barang berhasil ditambahkan!');
    }
    
    public function editbarang($kode_brg)
    {
        $barang = DB::table('barang')->where('kode_brg',$kode_brg)->first();
        return view('editbarang', compact('barang'));
    }

    public function editProcess(Request $request, $kode_brg)
    {
        DB::table('barang')->where('kode_brg',$kode_brg)
            ->update([
            //nama di db => nama di form inputan
            'kode_brg' =>$request->kode,
            'nama_brg' =>$request->nama,
            'satuan' =>$request->satuan,
            'harga_beli' =>$request->harga_beli,
            'harga_jual' =>$request->harga_jual,
            'jumlah' =>$request->jumlah,
            'diskon' =>$request->diskon
            ]);
        return redirect('barang')->with('status','Data barang berhasil diupdate!');
    }

    public function deletebarang($kode_brg)
    {
        DB::table('barang')->where('kode_brg',$kode_brg)->delete();
        return redirect('barang')->with('status','Data barang berhasil dihapus!');
    }
}

