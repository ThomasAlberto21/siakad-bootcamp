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

        </div>
    </div>
@endsection
