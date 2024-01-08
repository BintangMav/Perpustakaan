@extends('layouts.master')
@section('title', 'Data Peminjaman')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hoverable Table <a href="/peminjaman/create" class="btn btn-info float-right">Tambah</a></h4>
                    </p>
                    <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Member</th>
                                <th>Buku</th>
                                <th>Jumlah Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($peminjaman as $u)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$u->id_member}}</td>
                                <td>{{$u->id_buku}}</td>
                                <td>{{$u->jumlah_buku}}</td>
                                <td>{{$u->tgl_pinjam}}</td>
                                <td>{{$u->tgl_kembali}}</td>
                                <td>{{$u->tahun_buku}}</td>
                                <td>
                                    <a href="/peminjaman/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                    <button class="btn btn-danger" onclick="Delete('/peminjaman/{{$u->id}}/hapus')">Hapus</button>
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