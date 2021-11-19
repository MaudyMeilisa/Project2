@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Obat</h1>
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
                <div class="card-header">Data Obat</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Kode Obat</label>
                        <input type="text" name="nm_dokter" value="{{$obat->kd_obat}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Nama Obat</label>
                        <input type="text" name="nm_obat" value="{{$obat->nm_obat}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Jenis Obat</label>
                        <input type="text" name="jenis_obat" value="{{$obat->jenis_obat}}" class="form-control" readonly>

                    </div>

                    <div class="form-group">
                        <a href="{{url('admin/obat')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
