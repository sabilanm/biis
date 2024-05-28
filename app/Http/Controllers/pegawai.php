<?php

namespace App\Http\Controllers;

use App\Models\pegawaiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pegawai extends Controller
{
    public function show()
    {
        $pegawai = DB::table('pegawai')->get();
        return view('pegawai/home', ['pegawai' => $pegawai]);
    }
    public function creat(Request $request)
    {
        // dd($request->input());
        $nik = $request->input('nik');
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $nohp = $request->input('no_hp');
        $jenis_pegawai = $request->input('jenis_pegawai');
        $tlahir = $request->input('tgl_lahir');
        $jkel = $request->input('jenis_kelamin');
        $unit = $request->input('unit');

        $pegawai = pegawaiModel::create([
            'nik' => $nik,
            'nama_pegawai' => $nama,
            'alamat' => $alamat,
            'jkel' => $jkel,
            'jenis' => $jenis_pegawai,
            'unit' => $unit,
            'tgl_lahir' => $tlahir,
            'no_tlp' => $nohp,
        ]);
        if ($pegawai) {
            return redirect('/tambah_pegawai')->with(['success' => 'Data Pegawai Berhasil ditambah']);
        }else{
            return redirect('/tambah_pegawai')->with(['gagal' => 'Data Pegawai Gagal ditambah']);
        }
    }
}
