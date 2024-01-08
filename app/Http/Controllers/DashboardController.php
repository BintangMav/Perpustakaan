<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_buku = Buku::count();
        $peminjaman = Peminjaman::select()->orderBy('tgl_pinjam','desc')
                                        ->limit(5)
                                        ->get();

        $today = Carbon::today();
        $endDate = Carbon::today()->subDays(3);
        $total_pinjam = Peminjaman::select(Peminjaman::raw('SUM(jumlah_buku) as total_buku'))
                        ->whereBetween('tgl_pinjam', [$endDate, $today])->first();

        return view ('home.dashboard', compact('peminjaman', 'jumlah_buku'), ['total_pinjam'=>$total_pinjam]);
    }
}