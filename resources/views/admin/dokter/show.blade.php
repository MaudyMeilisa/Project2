@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Dokter</h1>
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
                <div class="card-header">Data Dokter</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Nama Dokter</label>
                        <input type="text" name="nm_dokter" value="{{$dokter->name}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> NIK</label>
                        <input type="number" name="nik" value="{{$dokter->name}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Gender</label>
                        <input type="radio" name="gender" value="{{$dokter->name}}" class="form-control" readonly> Laki-laki<br>
                            <input type="radio" name="gender" value="{{$dokter->name}}" class="form-control" readonly> Perempuan<br>
                    </div>
                    <div class="form-group">
                        <label for=""> Spesialis</label>
                        <input type="text" name="spesialis" value="{{$dokter->name}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> No Handphone</label>
                        <input type="number" name="no_hp" value="{{$dokter->name}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('admin/dokter')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
