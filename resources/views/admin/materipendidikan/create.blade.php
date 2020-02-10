@extends('layouts.master')

@section('title')
    Post Create
@endsection

@section('header') Buat Post @endsection
@section('desc') Tulis post barumu! @endsection

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
        <form action="{{ route('materipendidikan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">No</label>
                <div class="col-sm-12 col-md-10">
                    <input name="no" type="text" class="form-control{{ $errors->has('no') ? ' is-invalid' : '' }}">

                @if ($errors->has('no'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('no') }}</strong>
                    </span>
                @endif
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">Bidang</label>
                <div class="col-sm-12 col-md-10">
                    <input name="bidang" type="text" class="form-control{{ $errors->has('bidang') ? ' is-invalid' : '' }}">

                @if ($errors->has('bidang'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('bidang') }}</strong>
                    </span>
                @endif
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">Mata Pelajaran</label>
                <div class="col-sm-12 col-md-10">
                    <input name="matapelajaran" type="text" class="form-control{{ $errors->has('matapelajaran') ? ' is-invalid' : '' }}">

                @if ($errors->has('matapelajaran'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('matapelajaran') }}</strong>
                    </span>
                @endif
                </div>
            </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">Category</label>
            <div class="col-sm-12 col-md-10">
              <select class="form-control selectric" name="kategori">
                    <option value="">- Pilih Kategori -</option>
                @foreach($cat as $data)
                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">Thumbnail</label>
            <div class="col-sm-12 col-md-10">
              <div id="image-preview" class="image-preview">
                <label for="image-upload" id="image-label">Choose File</label>
                <input type="file" name="foto" id="image-upload" />

            @if ($errors->has('foto'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('foto') }}</strong>
                </span>
            @endif
              </div>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">Tags</label>
            <div class="col-sm-12 col-md-10">
                <select class="form-control selectric" name="tag[]" multiple>
                    {{--  <option value="">- Pilih Tag -</option>  --}}
                    @foreach ($tag as $data)
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                    @endforeach
                </select>

            @if ($errors->has('tag'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('tag') }}</strong>
                </span>
            @endif
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button type="submit" class="btn btn-primary">Buat Post</button>
              <a href="{{ route('materipendidikan.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('css')
    <!-- General CSS Files -->
    <link rel="stylesheet" href="/backend/AdminLTE-master/assets/modules/bootstrap/css/bootstrap.min.css'">
    <link rel="stylesheet" href="/backend/AdminLTE-master/assets/modules/fontawesome/css/all.min.css'">

    <!-- CSS Libraries -->

    <link rel="stylesheet" href="/backend/AdminLTE-master/assets/modules/select2/dist/css/select2.min.css'">
    <link rel="stylesheet" href="/backend/AdminLTE-master/assets/modules/jquery-selectric/selectric.css'">
    <link rel="stylesheet" href="/backend/AdminLTE-master/assets/modules/ckeditor/contents.css'">
    {{--  <link rel="stylesheet" href="/backend/AdminLTE-master/assets/modules/summernote/summernote-bs4.css'">  --}}
    <link rel="stylesheet" href="/backend/AdminLTE-master/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/backend/AdminLTE-master/assets/css/style.css'">
    <link rel="stylesheet" href="/backend/AdminLTE-master/assets/css/components.css'">
@endsection

@section('script')
    <!-- General JS Scripts -->
    <script src="/backend/AdminLTE-master/assets/modules/jquery.min.js'"></script>
    <script src="/backend/AdminLTE-master/assets/modules/popper.js'"></script>
    <script src="/backend/AdminLTE-master/assets/modules/tooltip.js'"></script>
    <script src="/backend/AdminLTE-master/assets/modules/bootstrap/js/bootstrap.min.js'"></script>
    <script src="/backend/AdminLTE-master/assets/modules/nicescroll/jquery.nicescroll.min.js'"></script>
    <script src="/backend/AdminLTE-master/assets/modules/moment.min.js'"></script>
    <script src="/backend/AdminLTE-master/assets/js/stisla.js'"></script>

    <!-- JS Libraies -->
    <script src="/backend/AdminLTE-master/assets/modules/select2/dist/js/select2.full.min.js'"></script>
    <script src="/backend/AdminLTE-master/assets/modules/ckeditor/ckeditor.js'"></script>
    <script>
        CKEDITOR.replace('editor1')
    </script>
    {{--  <script src="/backend/AdminLTE-master/assets/modules/summernote/summernote-bs4.js'"></script>  --}}
    <script src="/backend/AdminLTE-master/assets/modules/jquery-selectric/jquery.selectric.min.js'"></script>
    <script src="/backend/AdminLTE-master/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js'"></script>
    <script src="/backend/AdminLTE-master/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'"></script>

    <!-- Page Specific JS File -->
    <script src="/backend/AdminLTE-master/assets/js/page/features-post-create.js'"></script>

    <!-- Template JS File -->
    <script src="/backend/AdminLTE-master/assets/js/scripts.js'"></script>
    <script src="/backend/AdminLTE-master/assets/js/custom.js'"></script>
@endsection
