@extends('layouts.master')

@section('title')
    Edit
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Materi Pendidikan</div>
                <div class="card-body">
                    <form action="{{ route('materipendidikan.update', $materipendidikan->id) }}" method="post" enctype="multipart/form-data">
                       <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}

    <div class="form-group">
    <label for="">Nama Bidang</label>
        <select class="form-control" id="exampleFormControlSelect1" name="namabidang" value="{{ $materipendidikan->namabidang}}">
            <option>Pilih Bidang</option>
            <option>Bidang Studi</option>
            <option>Bidang Agama</option>
            <option>Bidang Matematika</option>
            <option>Program Ma'had</option>
        </select>
    </div>


    <div class="form-group">
            <label for="">Mata Pelajaran</label>
        <input class="form-control" type="text" name="matapelajaran" value="{{ $materipendidikan->matapelajaran }}">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('admin/materipendidikan') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
