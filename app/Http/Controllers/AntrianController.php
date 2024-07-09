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
        $nomorAntrian = 'T' . str_pad($nomorTerakhir, 3, '0', STR_PAD_LEFT);
        $nextAntrian = $lastAntrian ? $lastAntrian->no_antrian + 1 : 1;

        return view('ambil-antrian', compact('tanggal', 'nomorAntrian', 'nextAntrian'));
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
        $request->validate([
            'tanggal' => 'required',
            'no_antrian' => 'required',
            'status' => 'required',
        ]);

        Antrian::create([
            'tanggal' => $request->tanggal,
            'no_antrian' => $request->no_antrian,
            'status' => $request->status,
        ]);

        return redirect()->route('ambil-antrian.index');
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
