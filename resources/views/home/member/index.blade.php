@extends('layouts.master')
@section('title', 'Data User')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Table Member <a href="/member/create" class="btn btn-info float-right btn-sm">Tambah</a></h4>
                    </p>
                    <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telf</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($member as $u)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$u->nama}}</td>
                                <td>{{$u->alamat}}</td>
                                <td>{{$u->no_telp}}</td>
                                <td>
                                    <a href="/member/{{$u->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" onclick="Delete('/member/{{$u->id}}/hapus')">Hapus</button>
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