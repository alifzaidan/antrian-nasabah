<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;

class UnitController extends Controller
{

    public function index()
    {
        $units = Unit::all();

        return view('settings/unit', compact('units'));
    }

    public function create()
    {
        
    }

        public function store(StoreUnitRequest $request)
    {
        $unit = new Unit();
        $unit->nama = $request->input('nama');
        $unit->alamat = $request->input('alamat');
        $unit->no_telp = $request->input('no_telp');
        $unit->save();

        return redirect()->route('settings.unit')->with('success', 'Unit created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        $unit->nama = $request->input('nama');
        $unit->alamat = $request->input('alamat');
        $unit->no_telp = $request->input('no_telp');

        if ($unit->save()) {
            return redirect()->route('settings.unit')->with('success', 'Unit updated successfully!');
        } else {
            // Update failed, return an error message
            return redirect()->back()->withInput()->withErrors('Failed to update unit!');
        }
    }

    public function destroy(Unit $unit)
    {
        //
    }
}
