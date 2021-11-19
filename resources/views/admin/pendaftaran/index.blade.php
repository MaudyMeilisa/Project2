@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Pendaftaran</h1>
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
                <div class="card-header">
                    Data Pendaftaran
                    <a href="{{route('pendaftaran.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data Pendaftar</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>Tanggal Daftar</th>
                                <th>ID Pasien</th>
                                <th>ID Poliklinik</th>
                                <th>ID Dokter</th>
                                <th>Nama Dokter</th>
                                <th>Kasus</th>
                                <th>ID Obat</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($pendaftaran as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->tgl_daftar}}</td>
                                <td>{{$data->pasien->id}}</td>
                                <td>{{$data->poliklinik->id}}</td>
                                <td>{{$data->dokter->id}}</td>
                                <td>{{$data->dokter->nm_dokter}}</td>
                                <td>{{$data->kasus}}</td>
                                <td>{{$data->obat->id}}</td>
                                <td>
                                    <form action="{{route('pendaftaran.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('pendaftaran.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('pendaftaran.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
