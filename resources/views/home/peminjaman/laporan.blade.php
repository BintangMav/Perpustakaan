@extends('layouts.master')
@section('title', 'Data Laporan Peminjaman')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="/peminjaman/cetak" class="btn btn-success btn-sm float-right" target="_blank">Cetak Laporan</a>
                    <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Petugas</th>
                                <th>Member</th>
                                <th>Buku</th>
                                <th>Jumlah Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($peminjaman as $u)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$u->id_petugas}} - {{$u->User->name}}</td>
                                <td>{{$u->id_member}} - {{$u->Member->nama}}</td>
                                <td>{{$u->id_buku}} - {{$u->Buku->judul_buku}}</td>
                                <td>{{$u->jumlah_buku}}</td>
                                <td>{{$u->tgl_pinjam}}</td>
                                <td>{{$u->tgl_kembali}}</td>
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