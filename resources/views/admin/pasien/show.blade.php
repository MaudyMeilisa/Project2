@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Pasien</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Pasien</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <input type="text" name="nama" value="{{$pasien->nama}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">NIK</label>
                        <input type="number" name="nik" value="{{$pasien->nik}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <input type="text" name="gender" value="{{$pasien->gender}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" value="{{$pasien->tgl_lahir}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Alamat</label>
                        <input type="text" name="alamat" value="{{$pasien->alamat}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> No Handphone</label>
                        <input type="number" name="no_hp" value="{{$pasien->no_hp}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('admin/pasien')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
