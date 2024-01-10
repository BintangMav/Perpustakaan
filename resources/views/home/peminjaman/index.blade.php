@extends('layouts.master')
@section('title', 'Data Peminjaman')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Table Peminjaman <a href="/peminjaman/create" class="btn btn-info btn-sm float-right">Tambah</a></h4>
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
                                <th>Aksi</th>
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
                                <td>
                                    <a href="/peminjaman/{{$u->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" onclick="Delete('/peminjaman/{{$u->id}}/hapus')">Hapus</button>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil elemen input tanggal pinjam dan tanggal kembali
        var inputTglPinjam = document.getElementById('tgl_pinjam');
        var inputTglKembali = document.getElementById('tgl_kembali');
        var inputTglKembaliHidden = document.getElementById('tgl_kembali_hidden');

        // Tambahkan event listener ketika tanggal pinjam berubah
        inputTglPinjam.addEventListener('input', function () {
            // Ambil tanggal pinjam
            var tglPinjam = new Date(inputTglPinjam.value);

            // Hitung tanggal kembali dengan menambahkan 3 hari
            var tglKembali = new Date(tglPinjam);
            tglKembali.setDate(tglPinjam.getDate() + 3);

            // Format tanggal kembali menjadi string YYYY-MM-DD
            var formattedTglKembali = tglKembali.toISOString().split('T')[0];

            // Set nilai tanggal kembali pada input dan input tersembunyi
            inputTglKembali.value = formattedTglKembali;
            inputTglKembaliHidden.value = formattedTglKembali;
        });
    });
</script>
@endsection