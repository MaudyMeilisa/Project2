<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
        $obat = Obat::all();
        return view('admin.obat.index', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.obat.create');
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
            'kd_obat' => 'required',
            'nm_obat' => 'required',
            'jenis_obat' => 'required',
        ]);

        $obat = new Obat;
        $obat->kd_obat = $request->kd_obat;
        $obat->nm_obat = $request->nm_obat;
        $obat->jenis_obat = $request->jenis_obat;
        $obat->save();
        return redirect()->route('obat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
        $obat = Pasien::all();
        return view('admin.obat.show', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $obat = Obat::all();
        return view('admin.obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
        // validasi data
        $validated = $request->validate([
            'kd_obat' => 'required',
            'nm_obat' => 'required',
            'jenis_obat' => 'required',
        ]);

        $obat = Obat::all();
        $obat->kd_obat = $request->kd_obat;
        $obat->nm_obat = $request->nm_obat;
        $obat->jenis_obat = $request->jenis_obat;
        $obat->save();
        return redirect()->route('obat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
        $obat = Obat::all();
        $obat->delete();
        return redirect()->route('obat.index');
    }
}
