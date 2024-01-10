<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_bukus = Buku::count();
        $peminjaman = Peminjaman::select()->orderBy('tgl_pinjam','desc')
        ->limit(5)
        ->get();

        $totalBukuDipinjam = DB::table('peminjamen')
        ->join('bukus', 'peminjamen.id_buku', '=', 'bukus.id')
        ->sum('peminjamen.jumlah_buku');

        $topBooks = DB::table('peminjamen')
            ->select('bukus.judul_buku', DB::raw('SUM(peminjamen.jumlah_buku) as total_pinjam'))
            ->join('bukus', 'peminjamen.id_buku', '=', 'bukus.id')
            ->groupBy('bukus.judul_buku')
            ->orderByDesc('total_pinjam')
            ->limit(5)
            ->get();
        return view ('home.dashboard', compact('topBooks','peminjaman','totalBukuDipinjam','jumlah_bukus'));

    }
}