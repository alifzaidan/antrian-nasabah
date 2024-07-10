<?php

namespace App\Http\Controllers;

use App\Models\AntreanCs;
use App\Models\AntreanTeller;
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

        $jumlahAntreanTeller = AntreanTeller::count();
        $tanggalAwalTeller = AntreanTeller::orderBy('tanggal', 'asc')->first()->tanggal ?? '-';
        $tanggalAkhirTeller = AntreanTeller::orderBy('tanggal', 'desc')->first()->tanggal ?? '-';

        $jumlahAntreanCs = AntreanCs::count();
        $tanggalAwalCs = AntreanCs::orderBy('tanggal', 'asc')->first()->tanggal ?? '-';
        $tanggalAkhirCs = AntreanCs::orderBy('tanggal', 'desc')->first()->tanggal ?? '-';

        return view('settings.operasional', compact('title', 'slug', 'jumlahAntreanTeller', 'tanggalAwalTeller', 'tanggalAkhirTeller', 'jumlahAntreanCs', 'tanggalAwalCs', 'tanggalAkhirCs'));
    }

    public function unit()
    {
        $title = 'Manajemen Unit';
        $slug = 'unit';

        return view('settings.unit', compact('title', 'slug'));
    }

    public function resetTeller()
    {
        AntreanTeller::truncate();
        return redirect()->route('settings.operasional')->with('success', 'Data antrean teller berhasil direset.');
    }

    public function resetCs()
    {
        AntreanCs::truncate();
        return redirect()->route('settings.operasional')->with('success', 'Data antrean cs berhasil direset.');
    }
}
