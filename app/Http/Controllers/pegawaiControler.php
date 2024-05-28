<?php

namespace App\Http\Controllers;

use App\Models\pegawaiModel;
use Illuminate\Http\Request;

class pegawaiControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pegawai/home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('pegawai/home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
