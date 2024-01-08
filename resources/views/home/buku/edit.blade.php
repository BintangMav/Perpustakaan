@extends('layouts.master')
@section('title', 'Edit Data Buku')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample" action="/buku/{{$user->id}}/update" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Buku</label>
                            <input type="text" value="{{$user->kode_buku}}" name="kode_buku" class="form-control" id="" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="">Judul Buku</label>
                            <input type="text" value="{{$user->judul_buku}}" name="judul_buku" class="form-control" id="" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="">Kategori Buku</label>
                            <input type="text" value="{{$user->kategori_buku}}" name="kategori_buku" class="form-control" id="" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Buku</label>
                            <input type="text" value="{{$user->stok_buku}}" name="stok_buku" class="form-control" id="" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="">Tahun Buku</label>
                            <input type="text" value="{{$user->tahun_buku}}" name="tahun_buku" class="form-control" id="" placeholder="Nama">
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