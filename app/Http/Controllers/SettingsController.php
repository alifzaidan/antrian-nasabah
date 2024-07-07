<?php

namespace App\Http\Controllers;

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

        return view('settings.unit', compact('title', 'slug'));
    }
}
