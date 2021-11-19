@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Obat</h1>
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
                   <form action="{{route('obat.update',$obat->first()->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Masukan Kode Obat</label>
                            <input type="text" name="kd_obat" value="{{$obat->first()->kd_obat}}" class="form-control @error('kd_obat') is-invalid @enderror">
                             @error('kd_obat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Nama obat</label>
                            <input type="text" name="nm_obat" value="{{$obat->first()->nm_obat}}" class="form-control @error('nik') is-invalid @enderror">
                             @error('nm_obat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">jenis_obat</label>
                            <input type="text" name="jenis_obat" value="{{$obat->first()->jenis_obat}}" class="form-control @error('gender') is-invalid @enderror">
                             @error('jenis_obat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
