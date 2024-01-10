<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use App\Models\Buku;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penulis = Penulis::all();
        return view('home.penulis.index', compact(['penulis']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.penulis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Penulis::create([
            'nama_penulis'=>$request->nama_penulis,
            $request->except(['_token']),
        ]);
        return redirect('/penulis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penulis = Penulis::find($id);
        return view ('home.penulis.edit', compact(['penulis']));
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
        $penulis = Penulis::find($id);
        $penulis -> update([
            'nama_penulis'=>$request->nama_penulis,
            $request->except(['_token']),
        ]);
        return redirect('/penulis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::where('id_penulis',$id)
        ->each(function($old){
            $old->delete();
        });
        $penulis = Penulis::find($id);
        $penulis->delete();
        return redirect('/penulis');
    }
}
