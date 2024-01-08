@extends('layouts.master')
@section('title', 'Data Kategori')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Table Kategori <a href="/kategori/create" class="btn btn-info float-right btn-sm">Tambah</a></h4>
                    </p>
                    <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategori as $u)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$u->nama_kategori}}</td>
                                <td>
                                    <a href="/kategori/{{$u->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" onclick="Delete('/kategori/{{$u->id}}/hapus')">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection