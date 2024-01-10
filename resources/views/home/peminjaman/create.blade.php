@extends('layouts.master')
@section('title', 'Create Data Peminjaman')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Peminjaman</h4>
                    <form class="forms-sample" action="/peminjaman/simpan" method="POST">
                        @csrf
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                        <div class="form-group">
                            <label for="">Petugas</label>
                            <select name="id_petugas" class="form-control" id="">
                                @foreach ($user as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Peminjam</label>
                            <select name="id_member" class="form-control" id="">
                                @foreach ($member as $member)
                                <option value="{{$member->id}}">{{$member->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Buku</label>
                            <select name="id_buku" class="form-control" id="">
                                @foreach ($buku as $buku)
                                <option value="{{$buku->id}}">{{$buku->judul_buku}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Buku</label>
                            <input type="text" name="jumlah_buku" class="form-control" id="" placeholder="Jumlah Buku" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pinjam</label>
                            <input type="date" name="tgl_pinjam" class="form-control" id="" placeholder="Tanggal Pinjam" required>
                        </div>
                        {{-- <div class="form-group">
                            <label for="">tanggal Kembali</label>
                            <input type="date" name="tgl_kembali" class="form-control" id="" placeholder="Tanggal Kembali" required>
                            <!-- <input type="hidden" name="tgl_kembali_hidden" id="tgl_kembali_hidden"> -->
                        </div> --}}
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/peminjaman" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        var inputTglPinjam = document.getElementById('tgl_pinjam');
        var inputTglKembali = document.getElementById('tgl_kembali');
        var inputTglKembaliHidden = document.getElementById('tgl_kembali_hidden');

        inputTglPinjam.addEventListener('input', function () {
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
</script> -->
@endsection