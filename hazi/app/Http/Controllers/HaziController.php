<?php

namespace App\Http\Controllers;

use App\Models\Haziertekeles;
use Illuminate\Http\Request;

class HaziController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hazik = Haziertekeles::all();
        return view('hazik.index', [ 'hazik' => $hazik ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hazik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => 'required|min:8',
            'szoveges_ertekeles' => 'required|min:0|max:1000',
            'pontszam_ertekeles' => 'required|numeric|min:0|max:100',
        ]);

        $datas = $request->only(['url', 'szoveges_ertekeles', 'pontszam_ertekeles']);
        $hazi = new Haziertekeles();
        $hazi->fill($datas);
        $hazi->save();
        return redirect()->route('hazik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Haziertekeles  $haziertekeles
     * @return \Illuminate\Http\Response
     */
    public function show(Haziertekeles $hazi)
    {
        return view('hazik.show', [ 'hazi' => $hazi ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Haziertekeles  $haziertekeles
     * @return \Illuminate\Http\Response
     */
    public function edit(Haziertekeles $haziertekeles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Haziertekeles  $haziertekeles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Haziertekeles $haziertekeles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Haziertekeles  $haziertekeles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Haziertekeles $haziertekeles)
    {
        //
    }
}
