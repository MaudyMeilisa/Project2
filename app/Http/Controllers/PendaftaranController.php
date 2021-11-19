<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      // mengambil data 'pendaftaran' dan juga 'pasien','dokter','poliklinik','obat'
        // yang berelasi melalui method 'pasien','dokter','poliklinik','obat'
        // yang berasal dari model 'pendaftaran'
        $pendaftaran = Pendaftaran::with('pasien','dokter','poliklinik','obat')->get();
        return view('admin.pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //mengambil data 'pasien','dokter','poli','obat'
        $pendaftaran = Pendaftaran::all();
        return view('admin.pendaftaran.create', compact('pendaftaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tgl_daftar' => 'required',
            'id_pasien' => 'required',
            'id_poli' => 'required',
            'id_dokter' => 'required',
            'nm_dokter'=>'required',
            'kasus' => 'required',
            'id_obat' => 'required',
        ]);

        $pendaftaran = new Pendaftaran;
        $pendaftaran->tgl_daftar = $request->tgl_daftar;
        $pendaftaran->id_pasien = $request->id_pasien;
        $pendaftaran->id_poli = $request->id_poli;
        $pendaftaran->id_dokter = $request->id_dokter;
        $pendaftaran->nm_dokter = $request->nm_dokter;
        $pendaftaran->kasus = $request->kasus;
        $pendaftaran->id_obat = $request->id_obat;
        $pendaftaran->save();
        return redirect()->route('pendaftaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('admin.pendaftaran.show', compact('pendaftaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        $poliklinik = Poliklinik::all();
        $obat = Obat::all();
        return view('admin.pendaftaran.edit', compact('pendaftaran','pasien','dokter','poliklinik','obat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'tgl_daftar' => 'required',
            'id_pasien' => 'required',
            'id_poli' => 'required',
            'id_dokter' => 'required',
            'nm_dokter'=>'required',
            'kasus' => 'required',
            'id_obat' => 'required',
        ]);

        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->tgl_daftar = $request->tgl_daftar;
        $pendaftaran->id_pasien = $request->id_pasien;
        $pendaftaran->id_poli = $request->id_poli;
        $pendaftaran->id_dokter = $request->id_dokter;
        $pendaftaran->nm_dokter = $request->nm_dokter;
        $pendaftaran->kasus = $request->kasus;
        $pendaftaran->id_obat = $request->id_obat;
        $pendaftaran->save();
        return redirect()->route('pendaftaran.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();
        return redirect()->route('pendaftaran.index');
    }
}
