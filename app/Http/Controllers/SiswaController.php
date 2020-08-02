<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')->get();
        return view('siswa', ['siswas' => $siswa]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function create(Request $request)
    {
        DB::table('siswa')->insert(
            [
                'nama'      => $request->nama,
                'kelas'     => $request->kelas,
                'jurusan'   => $request->jurusan
            ]
        );
        return redirect('/siswa')->with(['success' => 'Data berhasil di tambah']);
    }
}
