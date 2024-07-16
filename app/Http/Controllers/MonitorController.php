<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    public function index()
    {
        $unit = Unit::all();
        return view('monitor', compact('unit'));
    }
}
