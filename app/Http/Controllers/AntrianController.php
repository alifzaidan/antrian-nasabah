<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Antrian;
use App\Http\Requests\StoreAntrianRequest;
use App\Http\Requests\UpdateAntrianRequest;

class AntrianController extends Controller
{
    public function index()
    {
        $tanggal = Carbon::now()->format('Y-m-d');
        $lastAntrian = Antrian::whereDate('tanggal', $tanggal)->orderBy('no_antrian', 'desc')->first();
        $nomorTerakhir = $lastAntrian ? $lastAntrian->no_antrian : 0;
        $nomorAntrian = 'T' . str_pad($nomorTerakhir, 2, '0', STR_PAD_LEFT);

        return view('nomor-antrian', compact('nomorAntrian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAntrianRequest $request)
    {
        $tanggal = Carbon::now()->format('Y-m-d');
        $lastAntrianToday = Antrian::whereDate('tanggal', $tanggal)->orderBy('no_antrian', 'desc')->first();
        $nomorAntrianBaru = $lastAntrianToday ? $lastAntrianToday->no_antrian + 1 : 1;

        $antrian = new Antrian();
        $antrian->tanggal = $tanggal;
        $antrian->nomor_antrian = $nomorAntrianBaru;
        $antrian->status = '0';
        $antrian->save();

        return redirect()->route('nomor-antrian.store')->with('success', 'Antrian berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Antrian $antrian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Antrian $antrian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAntrianRequest $request, Antrian $antrian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Antrian $antrian)
    {
        //
    }
}
