<?php

namespace App\Http\Controllers;

use App\Http\Requests\HaziRequest;
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
    public function store(HaziRequest $request)
    {
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
        return view('hazik.edit', [ 'haziertekeles' => $haziertekeles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Haziertekeles  $haziertekeles
     * @return \Illuminate\Http\Response
     */
    public function update(HaziRequest $request, Haziertekeles $haziertekeles)
    {
        $adatok = $request->only(['url', 'szoveges_ertekeles', 'pontszam_ertekeles']);
        $haziertekeles->fill($adatok);
        $haziertekeles->save();
        return redirect()->route('hazik.show', $haziertekeles->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Haziertekeles  $haziertekeles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Haziertekeles $haziertekeles)
    {
        $haziertekeles->delete();
        return redirect()->route('hazik.index');
    }
}
