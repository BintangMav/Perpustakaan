<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload ="window.print()">
<center>
    <h1> Laporan Peminjaman Perpustakaan </h1>
    <table class="table" border= "1">
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
                    <td>{{$u->tahun_buku}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</center>
    
</body>
</html>