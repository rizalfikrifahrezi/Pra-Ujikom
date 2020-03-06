@extends('layouts.master')

@section('content')

@section('button-add')
    <div class="section-header-button">
        <a href="{{ route('pendaftaran.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pendaftaran->pendaftaran }} &mdash; Pendaftaran</title>
</head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a name="" id="" class="btn btn-md btn-warning"
                            href="{{ route('pendaftaran.index') }}" role="button">Kembali</a>
                    </div>
                    <div class="card-header">Detail Data Pendaftaran</div>
                    <div class="card-body">
                    <form action="{{ route('pendaftaran.show', $pendaftaran->id ) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Pilih Angkatan</label>
                            <input type="text" name="pilihangkatan" class="form-control" value="{{ $pendaftaran->pilihangkatan }}" disabled>
                                </div>
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="namalengkap" class="form-control" value="{{ $pendaftaran->namalengkap }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="tempatlahir" class="form-control" value="{{ $pendaftaran->tempatlahir }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">No Telpon</label>
                                <input type="text" name="nomortelpon" class="form-control" value="{{ $pendaftaran->nomortelpon }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" value="{{ $pendaftaran->email }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Provinsi</label>
                                <input type="text" name="provinsi" class="form-control" value="{{ $pendaftaran->provinsi }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Kab / Kota</label>
                                <input type="text" name="kabkota" class="form-control" value="{{ $pendaftaran->kabkota }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Kecamatan</label>
                                <input type="text" name="kecamatan" class="form-control" value="{{ $pendaftaran->kecamatan }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Desa / Kelurahan</label>
                                <input type="text" name="desakelurahan" class="form-control" value="{{ $pendaftaran->desakelurahan }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat Lengkap</label>
                                <input type="text" name="alamatlengkap" class="form-control" value="{{ $pendaftaran->alamatlengkap }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Kode Pos</label>
                                <input type="text" name="kodepos" class="form-control" value="{{ $pendaftaran->kodepos }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Lengkap Ayah</label>
                                <input type="text" name="namalengkapayah" class="form-control" value="{{ $pendaftaran->namalengkapayah }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Lengkap Ibu</label>
                                <input type="text" name="namalengkapibu" class="form-control" value="{{ $pendaftaran->namalengkapibu }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Pekerjaan Ayah</label>
                                <input type="text" name="pekerjaanayah" class="form-control" value="{{ $pendaftaran->pekerjaanayah }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Pekerjaan Ibu</label>
                                <input type="text" name="pekerjaanibu" class="form-control" value="{{ $pendaftaran->pekerjaanibu }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">No Telp Rumah</label>
                                <input type="text" name="notelprumah" class="form-control" value="{{ $pendaftaran->notelprumah }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">No Telp Hp</label>
                                <input type="text" name="notelphp" class="form-control" value="{{ $pendaftaran->notelphp }}" disabled>
                            </div>



                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
