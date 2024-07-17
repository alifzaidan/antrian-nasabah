<?php

namespace App\Http\Controllers;

use App\Models\AntreanCs;
use Carbon\Carbon;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Models\AntreanTeller;

class PanggilAntreanController extends Controller
{
    public function index()
    {
        $unit = Unit::findOrFail(1);
        $jumlahTeller = $unit->jumlah_teller;
        $jumlahCs = $unit->jumlah_cs;

        return view('panggil-antrean', compact('jumlahTeller', 'jumlahCs'));
    }

    public function detailTeller($counterId)
    {
        $kodeOperasional = "TL";

        $tanggal = Carbon::now()->format('Y-m-d');

        $antreanSekarang = AntreanTeller::whereDate('tanggal', $tanggal)
            ->where('status', 2)
            ->orderBy('no_antrean', 'desc')
            ->first();
        $antreanSekarangFormat = $antreanSekarang ? 'TL' . str_pad($antreanSekarang->no_antrean, 3, '0', STR_PAD_LEFT) : 'Belum ada';

        $antreanSelanjutnya = AntreanTeller::whereDate('tanggal', $tanggal)
            ->where('status', 1)
            ->orderBy('no_antrean', 'asc')
            ->first();
        $antreanSelanjutnyaFormat = $antreanSelanjutnya ? 'TL' . str_pad($antreanSelanjutnya->no_antrean, 3, '0', STR_PAD_LEFT) : 'Belum ada';
        $jumlahAntrean = AntreanTeller::whereDate('tanggal', $tanggal)->count();
        $sisaAntrean = AntreanTeller::whereDate('tanggal', $tanggal)->where('status', 1)->count();
        $antreanBelumDipanggil = AntreanTeller::whereDate('tanggal', $tanggal)
            ->where('status', 1)
            ->orderBy('no_antrean', 'asc')
            ->paginate(5, ['*'], 'belum_dipanggil');

        $antreanSudahDipanggil = AntreanTeller::whereDate('tanggal', $tanggal)
            ->where('status', 2)
            ->orderBy('no_antrean', 'desc')
            ->paginate(5, ['*'], 'sudah_dipanggil');

        return view('panggil-antrean-detail', compact('counterId', 'kodeOperasional', 'antreanSekarangFormat', 'antreanSelanjutnyaFormat', 'jumlahAntrean', 'sisaAntrean', 'antreanBelumDipanggil', 'antreanSudahDipanggil'));
    }

    public function detailCs($counterId)
    {
        $kodeOperasional = "CS";

        $tanggal = Carbon::now()->format('Y-m-d');

        $antreanSekarang = AntreanCs::whereDate('tanggal', $tanggal)
            ->where('status', 2)
            ->orderBy('no_antrean', 'desc')
            ->first();
        $antreanSekarangFormat = $antreanSekarang ? 'CS' . str_pad($antreanSekarang->no_antrean, 3, '0', STR_PAD_LEFT) : 'Belum ada';

        $antreanSelanjutnya = AntreanCs::whereDate('tanggal', $tanggal)
            ->where('status', 1)
            ->orderBy('no_antrean', 'asc')
            ->first();
        $antreanSelanjutnyaFormat = $antreanSelanjutnya ? 'CS' . str_pad($antreanSelanjutnya->no_antrean, 3, '0', STR_PAD_LEFT) : 'Belum ada';
        $jumlahAntrean = AntreanCs::whereDate('tanggal', $tanggal)->count();
        $sisaAntrean = AntreanCs::whereDate('tanggal', $tanggal)->where('status', 1)->count();
        $antreanBelumDipanggil = AntreanCs::whereDate('tanggal', $tanggal)
            ->where('status', 1)
            ->orderBy('no_antrean', 'asc')
            ->paginate(5, ['*'], 'belum_dipanggil');

        $antreanSudahDipanggil = AntreanCs::whereDate('tanggal', $tanggal)
            ->where('status', 2)
            ->orderBy('no_antrean', 'desc')
            ->paginate(5, ['*'], 'sudah_dipanggil');

        return view('panggil-antrean-detail', compact('counterId', 'kodeOperasional', 'antreanSekarangFormat', 'antreanSelanjutnyaFormat', 'jumlahAntrean', 'sisaAntrean', 'antreanBelumDipanggil', 'antreanSudahDipanggil'));
    }

    public function panggilAntreanTeller(Request $request, $antreanId)
    {
        $antrean = AntreanTeller::find($antreanId);
        if ($antrean) {
            $antrean->status = 2;
            $antrean->no_counter = $request->input('no_counter');
            $antrean->save();
        }

        return redirect()->back();
    }

    public function panggilAntreanCs(Request $request, $antreanId)
    {
        $antrean = AntreanCs::find($antreanId);
        if ($antrean) {
            $antrean->status = 2;
            $antrean->no_counter = $request->input('no_counter');
            $antrean->save();
        }

        return redirect()->back();
    }
}
