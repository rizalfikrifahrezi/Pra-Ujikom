@extends('layouts.master')

@section('title')
    Editpurple
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Materi Pendidikan</div>
                <div class="card-body">
                    <form action="{{ route('materipendidikan.update', $materipendidikan->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}

                            <div class="form-group">
                                <label for="">Pendidikan</label>
                                <input class="form-control" type="text" name="namabidang" value="{{ $materipendidikan->namabidang}}" disabled>
                            </div>

                            <div class="form-group">
                                    <label for="">Mata Pelajaran</label>
                                <textarea class="form-control" name="matapelajaran" id="" cols="30" rows="10">{{ $materipendidikan->matapelajaran }}</textarea>
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
