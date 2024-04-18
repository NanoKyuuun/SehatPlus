<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi_medis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KonsultasiMedisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        if (auth()->user()->hasRole('pasien')) {
            $konsultasi = Konsultasi_medis::with('resep_obats')->where('user_id', auth()->user()->id)->get();
        } else {
            $konsultasi = Konsultasi_medis::with('resep_obats')->get();
        }
        return view('konsultasi_medis.index', [
            'konsultasi' => $konsultasi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('konsultasi_medis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'tanggal_konsultasi' =>'required',
            'keluhan' =>'required',
        ]);
        Konsultasi_medis::create([
            'user_id' => auth()->user()->id,
            'tanggal_konsultasi' => $request->tanggal_konsultasi,
            'keluhan' => $request->keluhan,
        ]);

        return Redirect::route('konsultasi.index')->with('success', 'Konsultasi berhasil, silahkan tunggu obat!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (auth()->user()->hasRole('pasien')) {
            $konsultasi = Konsultasi_medis::with('resep_obats')->where('user_id', auth()->user()->id)->get();
        } else {
            $konsultasi = Konsultasi_medis::with('resep_obats')->find($id);
        }
        return view('konsultasi_medis.show', [
            'konsultasi' => $konsultasi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konsultasi_medis $konsultasimedis, $id)
    {
        $konsultasi_medis = Konsultasi_medis::find($id);
        // dd($konsultasi_medis);
        return view('konsultasi_medis.edit', [
            'konsultasi' => $konsultasi_medis
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_konsultasi' =>'required',
            'keluhan' =>'required',
        ]);
        $product = Konsultasi_medis::find($id);
        $product->tanggal_konsultasi = $request->tanggal_konsultasi;
        $product->keluhan = $request->keluhan;
        $product->save();
        return Redirect::route('konsultasi.index')->with('success', 'Konsultasi berhasil update, silahkan tunggu obat!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // dd($id);
        Konsultasi_medis::destroy($id);
        return Redirect::route('konsultasi.index')->with('success', 'konsultasi hass been delete!');
    }
}
