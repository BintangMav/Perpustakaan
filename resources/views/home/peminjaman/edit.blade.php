@extends('layouts.master')
@section('title', 'Edit Data Peminjaman')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample" action="/peminjaman/{{$user->id}}/update" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Petugas</label>
                            <input type="text" value="{{$petugas->id_member}}" name="id_petugas" class="form-control" id="" placeholder="Petugas">
                        </div>
                        <div class="form-group">
                            <label for="">Member</label>
                            <input type="text" value="{{$peminjaman->id_member}}" name="id_member" class="form-control" id="" placeholder="Member">
                        </div>
                        <div class="form-group">
                            <label for="">Buku</label>
                            <input type="text" value="{{$peminjaman->id_buku}}" name="id_buku" class="form-control" id="" placeholder="Buku">
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Buku</label>
                            <input type="text" value="{{$peminjaman->jumlah_buku}}" name="jumlah_buku" class="form-control" id="" placeholder="Jumlah buku">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pinjam</label>
                            <input type="date" value="{{$peminjaman->tgl_pinjam}}" name="tgl_pinjam" class="form-control" id="" placeholder="Tanggal Pinjam">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Kembali</label>
                            <input type="date" value="{{$peminjaman->tgl_kembali}}" name="tgl_kembali" class="form-control" id="" placeholder="Tanggal Kembali">
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