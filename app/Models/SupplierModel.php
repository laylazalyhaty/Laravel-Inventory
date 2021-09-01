<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    public function datasupplier()
    {
        //variabel          tabel db
        $supplier = DB::table('supplier')->get();
        return view('datasupplier')->with('supplier',$supplier);
    }

    public function addsupplier(){
        return view('addsupplier');
    }

    public function addProcess(Request $request)
    {
        DB::table('supplier')->insert([
            //nama di db => nama di form inputan
            'kode_sup' =>$request->kode,
            'nama_sup' =>$request->nama,
            'alamat' =>$request->alamat,
            'telp' =>$request->telp,
            'agama' =>$request->agama,
            'jkel' =>$request->jkel,
            'hobi' =>$request->hobi
            // if(!empty($request->input('hobi'))){
            //     $checkbox = join($request->input('checkbox'));
            // }else{
            //     $checkbox ="";
            // }
        ]);
        return redirect('supplier')->with('status','Data supplier berhasil ditambahkan!');
    }
    
    public function editsupplier($kode_sup)
    {
        $supplier = DB::table('supplier')->where('kode_sup',$kode_sup)->first();
        return view('editsupplier', compact('supplier'));
    }

    public function editProcess(Request $request, $kode_sup)
    {
        DB::table('supplier')->where('kode_sup',$kode_sup)
            ->update([
            //nama di db => nama di form inputan
            'kode_sup' =>$request->kode,
            'nama_sup' =>$request->nama,
            'alamat' =>$request->alamat,
            'telp' =>$request->telp,
            'agama' =>$request->agama,
            'jkel' =>$request->jkel,
            'hobi' =>$request->hobi
            ]);
        return redirect('supplier')->with('status','Data supplier berhasil diupdate!');
    }

    public function deletesupplier($kode_sup)
    {
        DB::table('supplier')->where('kode_sup',$kode_sup)->delete();
        return redirect('supplier')->with('status','Data supplier berhasil dihapus!');
    }
}
