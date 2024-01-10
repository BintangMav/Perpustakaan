<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Kategori;
use App\Models\Penulis;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('home.buku.index', compact(['buku']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $penulis = Penulis::all();
        return view('home.buku.create', compact(['kategori','penulis']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Buku::create([
            'kode_buku'=>$request->kode_buku,
            'judul_buku'=>$request->judul_buku,
            'id_kategori'=>$request->id_kategori,
            'id_penulis'=>$request->id_penulis,
            'stok_buku'=>$request->stok_buku,
            'tahun_buku'=>$request->tahun_buku,
            $request->except(['_token']),
        ]);
        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::all();
        $penulis = Penulis::all();
        $buku = Buku::find($id);
        return view ('home.buku.edit', compact(['buku','kategori','penulis']));
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

    /**Buku
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $buku = Buku::find($id);
        $buku->update([
            'kode_buku'=>$request->kode_buku,
            'judul_buku'=>$request->judul_buku,
            'id_kategori'=>$request->id_kategori,
            'id_penulis'=>$request->id_penulis,
            'stok_buku'=>$request->stok_buku,
            'tahun_buku'=>$request->tahun_buku,
            $request->except(['_token']),
        ]);
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peminjaman::where('id_buku',$id)
        ->each(function($old){
            $old->delete();
        });
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }
}
