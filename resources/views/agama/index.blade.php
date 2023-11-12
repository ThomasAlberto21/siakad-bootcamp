@extends('layouts.main')

@section('Judul' , 'Agama')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{ url('/agama/add') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle"></i>
                    Tambah Agama
                </a>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nama Agama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agama as $item)
                        <tr>
                            <td style="width: 50px;" class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_agama }}</td>
                            <td>
                                <a href="{{ url('/agama/edit/' . $item->id) }}" class="btn btn-warning mr-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ url('/agama/delete/' . $item->id) }}" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
