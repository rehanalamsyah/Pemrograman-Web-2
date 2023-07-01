<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrasiPeminjamanBuku extends Controller
{
    public function index(){
        return view('peminjaman_buku');
    }

    public function hasil(Request $request){
        $this->validate($request, [
        'nama'=> 'required|max:50',
        'jenis_kelamin' => 'required',
        'tanggal_pinjam' => 'required',
        'tema_buku' => 'required',
        'no_isbn' => 'required',
        
        ]);

        return view('hasil_pinjam', [
    
        'data' => $request
        ]);
    }
}