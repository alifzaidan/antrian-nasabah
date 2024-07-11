<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Requests\StoreUnitRequest;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function monitor()
    {
        $title = 'Manajemen Monitor';
        $slug = 'monitor';

        return view('settings.monitor', compact('title', 'slug'));
    }

    public function operasional()
    {
        $title = 'Manajemen Operasional';
        $slug = 'operasional';

        return view('settings.operasional', compact('title', 'slug'));
    }

    public function unit()
    {
        $title = 'Manajemen Unit';
        $slug = 'unit';
        
        $units = Unit::all();

        return view('settings.unit', compact('units', 'title', 'slug'));
    }

    public function store(StoreUnitRequest $request)
    {
        Unit::create($request->validated());

        return redirect()->route('settings.unit')->with('success', 'Unit berhasil disimpan.');
    }

    public function update(StoreUnitRequest $request, Unit $unit)
    {
        $unit->update($request->validated());

        return redirect()->route('settings.unit')->with('success', 'Unit berhasil diperbarui.');
    }
}
