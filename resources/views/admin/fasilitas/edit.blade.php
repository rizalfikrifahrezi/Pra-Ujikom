@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Fasilitas</div>
                <div class="card-body">
                    <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="post" enctype="multipart/form-data">
                       <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Foto</label>
        <input type="file" class="form-control" name="foto">
        <div class="form-group">
    <img src="{{ asset('assets/img/fasilitas/' . $fasilitas->foto) }}" alt="" height="50p" width="50p">
            </div>
    <div class="form-group">
            <label for="">Nama Fasilitas</label>
        <input class="form-control" type="text" name="namafasilitas" value="{{ $fasilitas->namafasilitas}}">
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
        <input class="form-control" type="text" name="penjelasan" value="{{ $fasilitas->penjelasan }}">
        </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('admin/fasilitas') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
