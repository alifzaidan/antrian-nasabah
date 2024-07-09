<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:20000', // Batasan ukuran dan tipe file
        ]);

        if ($request->file('video')) {
            $path = $request->file('video')->store('public/videos');
            $filename = basename($path);

            // Simpan informasi video ke database jika diperlukan

            return redirect()->back()->with('success', 'Video berhasil diunggah!');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah video!');
    }
}
