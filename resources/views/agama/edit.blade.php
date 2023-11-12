@extends('layouts.main')

@section('Judul' , 'Agama')

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" action="{{url('/agama/update' , $agama->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Agama</label>
                <input type="text" class="form-control" name="nama_agama" value="{{old('agama' , $agama->nama_agama)}}" placeholder="Masukkan agama">
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i>
                Simpan
            </button>
            <a href="{{url('/agama')}}" class="btn btn-danger">
                <i class="fas fa-ban"></i>
                Batal
            </a>
        </form>
    </div>
</div>
@endsection