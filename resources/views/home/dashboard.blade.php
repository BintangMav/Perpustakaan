@extends('layouts.master')
@section('title','Dashboard')
@section('content')
    
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-sm-flex align-items-baseline report-summary-header">
                                <h5 class="font-weight-semibold">DASHBOARD</h5> 
                            </div>
                        </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                        <div class=" col-md -6 col-xl report-inner-card">
                            <div class="inner-card-text">
                                <span class="report-title">Buku</span>
                                <h4>{{$jumlah_buku}}</h4>
                            </div>
                            <div class="inner-card-icon bg-success">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl report-inner-card">
                            <div class="inner-card-text">
                                <span class="report-title">BUKU YANG DIPINJAM</span>
                                <h4>{{number_format($total_pinjam->total_barang)}}</h4>
                            </div>
                            <div class="inner-card-icon bg-warning">
                                <i class="icon-briefcase"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-sm-flex align-items-baseline report-summary-header">
                                <h5 class="font-weight-semibold">History Tabel Data Peminjaman</h5> 
                            </div>
                        </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                        <table  id="" class="table table-hover">
                            <thead >
                                <tr style="background-color: rgb(155, 248, 137)">
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
                                @foreach ($peminjaman as $u)
                                <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$u->id_petugas}} - {{$u->User->name}}</td>
                                <td>{{$u->id_member}} - {{$u->Member->nama}}</td>
                                <td>{{$u->id_buku}} - {{$u->Buku->judul_buku}}</td>
                                <td>{{$u->jumlah_buku}}</td>
                                <td>{{$u->tgl_pinjam}}</td>
                                <td>{{$u->tgl_kembali}}</td>
                                <td>{{$u->tahun_buku}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection