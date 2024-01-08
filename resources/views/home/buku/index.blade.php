@extends('layouts.master')
@section('title', 'Data Buku')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hoverable Table <a href="/buku/create" class="btn btn-info float-right">Tambah</a></h4>
                    </p>
                    <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Tahun</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($buku as $u)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$u->kode_buku}}</td>
                                <td>{{$u->judul_buku}}</td>
                                <td>{{$u->kategori_buku}}</td>
                                <td>{{$u->stok_buku}}</td>
                                <td>{{$u->tahun_buku}}</td>
                                <td>
                                    <a href="/buku/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                    <button class="btn btn-danger" onclick="Delete('/buku/{{$u->id}}/hapus')">Hapus</button>
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