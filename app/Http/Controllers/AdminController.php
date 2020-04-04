<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\karyawan;

class AdminController extends Controller
{
    //
    public function index()
    {
        // $karyawan =\App\karyawan::all();
        $karyawan = DB::table('karyawan')->paginate(10);
        return view('karyawan.data',['karyawan'=>$karyawan]);
    }
    public function tambah()
    {
        return view('karyawan.tambah');
    }
    public function create(Request $request)
    {
        // \App\karyawan::create($request->all());
        karyawan::create($request->all());
        return redirect('/admin')->with('sukses', 'Data berhasil di input');
    }
    public function edit($id)
    {
        $karyawan=karyawan::find($id);
        return view('karyawan/edit',['karyawan'=>$karyawan]);
    }
    public function update(Request $request, $id)
    {
        $karyawan=karyawan::find($id);
        $karyawan->update($request->all());
        return redirect('/admin')->with('sukses', 'Data berhasil di update');
    }
    public function hapus($id)
    {
        $karyawan=karyawan::find($id);
        $karyawan->delete($karyawan);
        return redirect('/admin')->with('sukses', 'Data berhasil di hapus');
    }
    public function inputlembur()
    {
        return view('karyawan.inputlembur');
    }
    public function cari(Request $request)
    {
	// menangkap data pencarian
	$cari = $request->cari;
 	// mengambil data dari table pegawai sesuai pencarian data
	$karyawan = DB::table('karyawan')
    ->where('nama_depan','like',"%".$cari."%")
    ->orwhere('nama_belakang','like',"%".$cari."%")
	->paginate();
    	// mengirim data pegawai ke view index
	return view('karyawan.data',['karyawan' => $karyawan]);
    }
    public function transaksi()
    {
        // $karyawan =\App\karyawan::all();
        $karyawan = DB::table('karyawan')->paginate(10);
        return view('karyawan.transaksi',['karyawan'=>$karyawan]);
    }
}
