@extends('layouts.master')
@section('title', 'Edit Data Member')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data Member</h4>
                    <form class="forms-sample" action="/member/{{$member->id}}/update" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" value="{{$member->nama}}" name="nama" class="form-control" id="" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" value="{{$member->alamat}}" name="alamat" class="form-control" id="" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label for="">No Telpon</label>
                            <input type="number" value="{{$member->no_telp}}" name="no_telp" class="form-control" placeholder="No Telpon" required>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/user" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection