<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
        $pasien = Pasien::all();
        return view('admin.pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validasi data
        $validated = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $pasien = new Pasien;
        $pasien->nama = $request->nama;
        $pasien->nik = $request->nik;
        $pasien->gender = $request->gender;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->alamat = $request->alamat;
        $pasien->no_hp = $request->no_hp;
        $pasien->save();
        return redirect()->route('pasien.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
        $pasien = Pasien::all();
        return view('admin.pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pasien = Pasien::all();
        return view('admin.pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
        // validasi data
        $validated = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $pasien = Pasien::all();
        $pasien->nama = $request->nama;
        $pasien->nik = $request->nik;
        $pasien->gender = $request->gender;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->alamat = $request->alamat;
        $pasien->no_hp = $request->no_hp;
        $pasien->save();
        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
        $pasien = Pasien::all();
        $pasien->delete();
        return redirect()->route('pasien.index');
    }
}
