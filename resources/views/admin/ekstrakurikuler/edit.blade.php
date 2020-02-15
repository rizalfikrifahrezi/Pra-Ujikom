@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Ekstrakurikuler</div>
                <div class="card-body">
                    <form action="{{ route('ekstrakurikuler.update', $ekstrakurikuler->id) }}" method="post" enctype="multipart/form-data">
                       <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Foto</label>
        <input type="file" class="form-control" name="foto">
        <div class="form-group">
    <img src="{{ asset('assets/img/ekstrakurikuler/' . $ekstrakurikuler->foto) }}" alt="" height="50p" width="50p">
            </div>
    <div class="form-group">
            <label for="">Nama Ekstrakurikuler</label>
        <input class="form-control" type="text" name="namaekskul" value="{{ $ekstrakurikuler->namaekskul}}">
        </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('admin/ekstrakurikuler') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
