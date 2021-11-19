@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Obat</h1>
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
                    Data Obat
                    <a href="{{route('obat.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data Obat</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>NO</th>
                                <th>Kode Obat</th>
                                <th>Nama Obat</th>
                                <th>Jenis Obat</th>

                            </tr>
                            @php $no=1; @endphp
                            @foreach($obat as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->kd_obat}}</td>
                                <td>{{$data->nm_obat}}</td>
                                <td>{{$data->jenis_obat}}</td>

                                <td>
                                    <form action="{{route('obat.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('obat.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('obat.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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
