<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
    	$siswa = Siswa::all();
    	return view('siswa.crud_siswa', ['siswa' => $siswa]);
    }
    public function tambah()
    {
        return view('siswa.tambah');
    }
    public function create(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|regex:/^[a-zA-Z]+$/u|max:20',
            'tahun' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'nilai' => 'required|numeric'
        ]);
        Siswa::create([
    		'nama' => $request->nama,
            'tahun' => $request->tahun,
            'nilai' => $request->nilai,
    	]);
 
    	return redirect('/siswa');
    }
    public function edit($id)
    {
        $siswa=Siswa::find($id);
        return view('siswa/edit',['siswa'=>$siswa]);
    }
    public function update(Request $request, $id)
    {   $siswa=Siswa::find($id);
        $this->validate($request,[
        'nama' => 'required|regex:/^[a-zA-Z]+$/u|max:20',
        'tahun' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
        'nilai' => 'required|numeric'
        ]);
        
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses', 'Data berhasil di update');
    }
    public function hapus($id)
    {
        $siswa=Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses', 'Data berhasil di hapus');
    }
    public function cari(Request $request)
    {
	// menangkap data pencarian
	$cari = $request->cari;
 	// mengambil data dari table siswa sesuai pencarian data
	$siswa = DB::table('nilai_siswa')
    ->where('nama','like',"%".$cari."%")
    ->orwhere('tahun','like',"%".$cari."%")
    ->orwhere('nilai','like',"%".$cari."%")
	->paginate();
    	// mengirim data pegawai ke view index
	return view('siswa.crud_siswa',['siswa' => $siswa]);
    }
}
