@extends('layouts.master')

@section('title')
    Post Create
@endsection

@section('header') Buat Post @endsection
@section('desc') Tulis post barumu! @endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Galeri</div>
                <div class="card-body">
                    <form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                            Simpan Data
                            </button>
                            </div>
                            <div class="form-group">
                            <a href="{{ url('admin/galeri') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
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
