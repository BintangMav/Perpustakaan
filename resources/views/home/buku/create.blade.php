@extends('layouts.master')
@section('title', 'Create Data Buku')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample" action="/buku/simpan" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Buku</label>
                            <input type="text" name="kode_buku" class="form-control" id="" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="">Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control" id="" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <select name="id_kategori" class="form-control" id="">
                                @foreach ($kategori as $kategori)
                                <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Penulis</label>
                            <select name="id_penulis" class="form-control" id="">
                                @foreach ($penulis as $penulis)
                                <option value="{{$penulis->id}}">{{$penulis->nama_penulis}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Stok Buku</label>
                            <input type="text" name="stok_buku" class="form-control" id="" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="">Tahun Buku</label>
                            <input type="text" name="tahun_buku" class="form-control" id="" placeholder="Nama">
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