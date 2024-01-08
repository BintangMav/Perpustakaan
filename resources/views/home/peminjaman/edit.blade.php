@extends('layouts.master')
@section('title', 'Edit Data Peminjaman')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Peminjaman</h4>
                    <form class="forms-sample" action="/peminjaman/{{$peminjaman->id}}/update" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Petugas</label>
                            <select name="id_petugas" class="form-control" id="">
                                @foreach ($user as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Peminjam</label>
                            <select name="id_member" class="form-control" id="">
                                @foreach ($member as $member)
                                <option value="{{$member->id}}">{{$member->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Buku</label>
                            <select name="id_buku" class="form-control" id="">
                                @foreach ($buku as $buku)
                                <option value="{{$buku->id}}">{{$buku->judul_buku}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Buku</label>
                            <input type="number" value="{{$peminjaman->jumlah_buku}}" name="jumlah_buku" class="form-control" id="" placeholder="Jumlah buku" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pinjam</label>
                            <input type="date" value="{{$peminjaman->tgl_pinjam}}" name="tgl_pinjam" class="form-control" id="" placeholder="Tanggal Pinjam" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Kembali</label>
                            <input type="date" value="{{$peminjaman->tgl_kembali}}" name="tgl_kembali" class="form-control" id="" placeholder="Tanggal Kembali" required>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/buku" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection