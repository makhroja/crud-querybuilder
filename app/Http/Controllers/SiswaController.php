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
}
