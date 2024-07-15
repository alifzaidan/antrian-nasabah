<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;

class UnitController extends Controller
{
<<<<<<< HEAD

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
=======
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUnitRequest $request)
    {
        //
>>>>>>> acf8bb9743c94414381424098dce632d4eca55f0
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
<<<<<<< HEAD
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

=======
        //
    }

    /**
     * Remove the specified resource from storage.
     */
>>>>>>> acf8bb9743c94414381424098dce632d4eca55f0
    public function destroy(Unit $unit)
    {
        //
    }
}
