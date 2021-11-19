@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Buku</h1>
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
                <div class="card-header">Data Poliklinik</div>
                <div class="card-body">
                   <form action="{{route('poliklinik.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Tanggal Daftar</label>
                            <input type="date" name="tgl_daftar" class="form-control @error('tgl_daftar') is-invalid @enderror">
                             @error('tgl_daftar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan ID Pasien</label>
                            <select name="id_pasien" class="form-control @error('id_pasien') is-invalid @enderror" >
                            </select>
                            @error('id_pasien')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan ID Poliklinik</label>
                            <select name="id_poli" class="form-control @error('id_poli') is-invalid @enderror" >
                            </select>
                            @error('id_poli')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan ID Dokter</label>
                            <select name="id_dokter" class="form-control @error('id_dokter') is-invalid @enderror" >
                            </select>
                            @error('id_dokter')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Nama Dokter</label>
                            <select name="nm_dokter" class="form-control @error('nm_dokter') is-invalid @enderror" >
                            </select>
                            @error('nm_dokter')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Keluhan</label>
                            <input type="text" name="kasus" class="form-control @error('kasus') is-invalid @enderror">
                             @error('kasus')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan ID Obat</label>
                            <select name="id_obat" class="form-control @error('id_obat') is-invalid @enderror" >
                                @foreach($obat as $data)
                                    <option value="{{$data->id}}">{{$data->id}}</option>
                                @endforeach
                            </select>
                            @error('id_obat')
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
