@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Pasien</h1>
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
                    Data Pasien
                    <a href="{{route('pasien.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data Pasien</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Gender</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>No Handphone</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($pasien as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->nik}}</td>
                                <td>{{$data->gender}}</td>
                                <td>{{$data->tgl_lahir}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->no_hp}}</td>
                                <td>
                                    <form action="{{route('pasien.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('pasien.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('pasien.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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
