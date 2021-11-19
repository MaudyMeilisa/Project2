<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
        $dokter = Dokter::all();
        return view('admin.dokter.index', compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.dokter.create');
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
            'nm_dokter' => 'required',
            'nik' => 'required',
            'gender' => 'required',
            'spesialis' => 'required',
            'no_hp' => 'required',
        ]);

        $dokter = new Dokter;
        $dokter->nm_dokter = $request->nm_dokter;
        $dokter->nik = $request->nik;
        $dokter->gender = $request->gender;
        $dokter->spesialis = $request->spesialis;
        $dokter->no_hp = $request->no_hp;
        $dokter->save();
        return redirect()->route('dokter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
        $dokter = Dokter::all();
        return view('admin.dokter.show', compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dokter = Dokter::all();
        return view('admin.dokter.edit', compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
        // validasi data
        $validated = $request->validate([
            'nm_dokter' => 'required',
            'nik' => 'required',
            'gender' => 'required',
            'spesialis' => 'required',
            'no_hp' => 'required',
        ]);

        $dokter = Dokter::all();
        $dokter->nm_dokter = $request->nm_dokter;
        $dokter->nik = $request->nik;
        $dokter->gender = $request->gender;
        $dokter->spesialis = $request->spesialis;
        $dokter->no_hp = $request->no_hp;
        $dokter->save();
        return redirect()->route('dokter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
        $dokter = Dokter::all();
        $dokter->delete();
        return redirect()->route('dokter.index');
    }
}
