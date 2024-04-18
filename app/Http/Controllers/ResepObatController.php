<?php

namespace App\Http\Controllers;

use App\Models\Resep_obat;
use App\Http\Requests\StoreResep_obatRequest;
use App\Http\Requests\UpdateResep_obatRequest;
use App\Models\Konsultasi_medis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ResepObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $obat = Konsultasi_medis::find($id);
        return view('resep_obat.create', [
            'data' => $obat,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'konsultasi_medis_id' =>'required',
            'diagnisis' =>'required',
            'obat' =>'required',
            'dosis' =>'required',
            'aturan_minum' =>'required',
        ]);
        Resep_obat::create([
            'konsultasi_medis_id' => $request->konsultasi_medis_id,
            'diagnisis' => $request->diagnisis,
            'obat' => $request->obat,
            'dosis' => $request->dosis,
            'aturan_minum' => $request->aturan_minum,
        ]);

        return Redirect::route('konsultasi.index')->with('success', 'Resep obat berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $resep_obat = Konsultasi_medis::with('resep_obats')->find($id);
        return view('resep_obat.show',[
            'data_obat' => $resep_obat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $obat = Resep_obat::where('konsultasi_medis_id', $id)->first();
        $konsultasi = Konsultasi_medis::findOrFail($id);
        return view('resep_obat.edit', [
            'data' => $obat,
            'konsultasi' => $konsultasi
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'konsultasi_medis_id' =>'required',
            'diagnisis' =>'required',
            'obat' =>'required',
            'dosis' =>'required',
            'aturan_minum' =>'required',
        ]);
        $product = Resep_obat::find($id);
        $product->konsultasi_medis_id = $request->konsultasi_medis_id;
        $product->diagnisis = $request->diagnisis;
        $product->obat = $request->obat;
        $product->dosis = $request->dosis;
        $product->aturan_minum = $request->aturan_minum;
        $product->save();
        return Redirect::route('konsultasi.index')->with('success', 'Resep obat berhasil update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Resep_obat::destroy($id);
        return Redirect::route('konsultasi.index')->with('success', 'obat hass been delete!');
    }

    public function download_pdf($id){
        $resep_obat = Konsultasi_medis::with('resep_obats')->find($id);
        return view('resep_obat.pdf_resepobat', [
            'data_obat' => $resep_obat
        ]);
    }
}
