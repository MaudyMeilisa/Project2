<?php

namespace App\Http\Controllers;

use App\Models\Poliklinik;
use Illuminate\Http\Request;

class PoliklinikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
        $poliklinik = Poliklinik::all();
        return view('admin.poliklinik.index', compact('poliklinik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.poliklinik.create');
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
            'nm_poli' => 'required',
        ]);

        $poliklinik = new Poliklinik;
        $poliklinik->nm_poli = $request->nm_poli;
        $poliklinik->save();
        return redirect()->route('poliklinik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poliklinik  $poliklinik
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
        $poliklinik = Poliklinik::all();
        return view('admin.poliklinik.show', compact('poliklinik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poliklinik  $poliklinik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $poliklinik = Poliklinik::all();
        return view('admin.poliklinik.edit', compact('poliklinik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poliklinik  $poliklinik
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
        // validasi data
        $validated = $request->validate([
            'nm_poli' => 'required',
        ]);

        $poliklinik = Poliklinik::all();
        $poliklinik->nm_poli = $request->nm_poli;
        $poliklinik->save();
        return redirect()->route('poliklinik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poliklinik  $poliklinik
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
        $poliklinik = Poliklinik::all();
        $poliklinik->delete();
        return redirect()->route('poliklinik.index');
    }
}
