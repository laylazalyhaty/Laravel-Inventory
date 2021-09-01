<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryawanModel extends Model
{
    public function datakaryawan()
    {
        //variabel          tabel db
        $karyawan = DB::table('karyawan')->get();
        return view('datakaryawan')->with('karyawan',$karyawan);
    }

    public function addkaryawan(){
        return view('addkaryawan');
    }

    public function addProcess(Request $request)
    {
        DB::table('karyawan')->insert([
            //nama di db => nama di form inputan
            'kode_kar' =>$request->kode,
            'nama_kar' =>$request->nama,
            'jkel' =>$request->jkel,
            'agama' =>$request->agama,
            'hobi' =>$request->hobi,
            'alamat' =>$request->alamat,
            'telp' =>$request->telp
            // if(!empty($request->input('hobi'))){
            //  $checkbox = join($request->input('checkbox'));
            // }else{
            //     $checkbox ="";
            // }
          
        ]);
        return redirect('karyawan')->with('status','Data karyawan berhasil ditambahkan!');
    }
    
    public function editkaryawan($kode_kar)
    {
        $karyawan = DB::table('karyawan')->where('kode_kar',$kode_kar)->first();
        return view('editkaryawan', compact('karyawan'));
    }

    public function editProcess(Request $request, $kode_kar)
    {
        DB::table('karyawan')->where('kode_kar',$kode_kar)
            ->update([
            //nama di db => nama di form inputan
            'kode_kar' =>$request->kode,
            'nama_kar' =>$request->nama,
            'jkel' =>$request->jkel,
            'agama' =>$request->agama,
            'hobi' =>$request->hobi,
            'alamat' =>$request->alamat,
            'telp' =>$request->telp
            ]);
        return redirect('karyawan')->with('status','Data karyawan berhasil diupdate!');
    }

    public function deletekaryawan($kode_kar)
    {
        DB::table('karyawan')->where('kode_kar',$kode_kar)->delete();
        return redirect('karyawan')->with('status','Data karyawan berhasil dihapus!');
    }
}
