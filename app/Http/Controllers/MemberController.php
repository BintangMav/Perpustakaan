<?php

namespace App\Http\Controllers;

use App\Models\Member;
// use App\Models\Peminjaman;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::all();
        return view('home.member.index', compact(['member']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Member::create([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'tgl_pinjam'=>$request->tgl_pinjam,
            $request->except(['_token']),
        ]);
        return redirect('/member');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::find($id);
        return view ('home.member.edit', compact(['member']));
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
        $member = Member::find($id);
        $member->update([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'tgl_pinjam'=>$request->tgl_pinjam,
            $request->except(['_token']),
        ]);
        return redirect('/member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Peminjaman::where('id_member',$id)
        // ->each(function($old){
        //     $old->delete();
        // });
        $member = Member::find($id);
        $member->delete();
        return redirect('/member');
    }
}
