@extends('layouts.master')
@section('title', 'Edit Data Kategori')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Member</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample" action="/kategori/{{$kategori->id}}/update" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" value="{{$katgeori->nama_kategori}}" name="nama_kategori" class="form-control" id="" placeholder="Nama">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/kategori" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection