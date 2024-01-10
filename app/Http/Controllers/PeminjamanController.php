<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Member;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('home.peminjaman.index', compact(['peminjaman']));
    }

    public function cetak()
    {
        $peminjaman = Peminjaman::all();
        return view('home.peminjaman.cetak', compact(['peminjaman']));
    }

    public function laporan()
    {
        $peminjaman = Peminjaman::all();
        return view('home.peminjaman.laporan', compact(['peminjaman']));
    }

    // public function struk($id)
    // {

    //     $peminjaman = Peminjaman::find($id);
    //     return view('home.peminjaman.struk', compact(['peminjaman']));
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        $user = User::all();
        $member = Member::all();
        return view('home.peminjaman.create', compact(['buku','member','user']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     // Validasi form request, pastikan tgl_pinjam ada di dalam request

   
     public function store(Request $request)
{
    $buku = Buku::find($request->id_buku);

    if ($request->jumlah_buku > $buku->stok_buku) {
        return redirect()->back()->with('error', 'Jumlah buku yang diminta melebihi stok buku yang tersedia.');
    }

    $stok_setelah_peminjaman = max(0, $buku->stok_buku - $request->jumlah_buku);

    $tglPinjam = Carbon::parse($request->tgl_pinjam);
    $tglKembali = $request->filled('tgl_kembali') ? Carbon::parse($request->tgl_kembali) : $tglPinjam->addDays(3);

    $buku->stok_buku = $stok_setelah_peminjaman;
    $buku->save();
    Peminjaman::create([
        'id_petugas' => $request->id_petugas,
        'id_member' => $request->id_member,
        'id_buku' => $request->id_buku,
        'tgl_pinjam' => $request->tgl_pinjam,
        'tgl_kembali' => $tglKembali, 
        'jumlah_buku' => $request->jumlah_buku,
        $request->except(['_token']),
    ]);

    Buku::where('id', $request->id_buku)->update(['stok_buku' => $stok_setelah_peminjaman]);
    return redirect('/peminjaman');
}

     

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjaman = Peminjaman::find($id);
        $buku = Buku::all();
        $user = User::all();
        $member = Member::all();
        return view('home.peminjaman.create', compact(['buku','member','user','peminjaman']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->update([
            'id_petugas'=>$request->id_petugas,
            'id_member'=>$request->id_member,
            'id_buku'=>$request->id_buku,
            'tgl_pinjam'=>$request->tgl_pinjam,
            'tgl_kembali'=>$request->tgl_kembali,
            'jumlah_buku'=>$request->jumlah_buku,
            $request->except(['_token']),
        ]);
        return redirect('/peminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();
        return redirect('/peminjaman');
    
    }
}
