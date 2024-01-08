@extends('layouts.master')
@section('title', 'Create Data Peminjaman')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample" action="/peminjaman/simpan" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Petugas</label>
                            <select name="id_petugas" class="form-control" id="">
                                @foreach ($user as $user)
                                <option value="{{$user->id}}">{{$user->nama_petugas}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Peminjam</label>
                            <select name="id_member" class="form-control" id="">
                                @foreach ($member as $member)
                                <option value="{{$member->id}}">{{$member->nama_member}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Buku</label>
                            <select name="id_buku" class="form-control" id="">
                                @foreach ($buku as $buku)
                                <option value="{{$buku->id}}">{{$buku->nama_buku}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Buku</label>
                            <input type="text" name="jumlah_buku" class="form-control" id="" placeholder="Jumlah Buku">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pinjam</label>
                            <input type="date" name="tgl_pinjam" class="form-control" id="" placeholder="Tanggal Pinjam">
                        </div>
                        <div class="form-group">
                            <label for="">tanggal Kembali</label>
                            <input type="date" name="tgl_kembali" class="form-control" id="" placeholder="Tanggal Kembali">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/peminjaman" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection