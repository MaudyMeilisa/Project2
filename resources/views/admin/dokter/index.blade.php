@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Dokter</h1>
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
                    Data Dokter
                    <a href="{{route('dokter.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data Dokter</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Gender</th>
                                <th>Spesialis</th>
                                <th>No Handphone</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($dokter as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nm_dokter}}</td>
                                <td>{{$data->nik}}</td>
                                <td>{{$data->gender}}</td>
                                <td>{{$data->spesialis}}</td>
                                <td>{{$data->no_hp}}</td>
                                <td>
                                    <form action="{{route('dokter.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('dokter.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('dokter.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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
