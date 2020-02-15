@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Pendaftaran Pesantren Daarul Qolam</div>
                <div class="card-body">
                    <form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="post" enctype="multipart/form-data">
                       <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}

    <div class="form-group">
    <label for="">Pendidikan</label>
        <select class="form-control" id="exampleFormControlSelect1" name="pilihangkatan" value="{{ $pendaftaran->pilihangkatan}}">
            <option>Pilih Pendidikan</option>
            <option>Tk Al-Qur'an</option>
            <option>Sd Islam Terpadu</option>
            <option>Smp Islam Terpadu</option>
        </select>
    </div>

    <div class="form-group">
            <label for="">Nama Lengkap</label>
        <input class="form-control" type="text" name="namalengkap" value="{{ $pendaftaran->namalengkap }}">
    </div>

    <div class="form-group">
            <label for="">Tempat lahir</label>
        <input class="form-control" type="text" name="tempatlahir" value="{{ $pendaftaran->tempatlahir }}">
    </div>

    <div class="form-group">
            <label for="">Tanggal Lahir</label>
        <input class="form-control" type="text" name="tanggallahir" value="{{ $pendaftaran->tanggallahir }}">
    </div>

    <div class="form-group">
            <label for="">Nomor Telpon</label>
        <input class="form-control" type="text" name="notelpon" value="{{ $pendaftaran->nomortelpon }}">
    </div>

    <div class="form-group">
            <label for="">Email</label>
        <input class="form-control" type="text" name="email" value="{{ $pendaftaran->email }}">
    </div>

    <div class="form-group">
            <label for="">Provinsi</label>
        <input class="form-control" type="text" name="provinsi" value="{{ $pendaftaran->provinsi }}">
    </div>

    <div class="form-group">
            <label for="">Kab / Kota</label>
        <input class="form-control" type="text" name="kabkota" value="{{ $pendaftaran->kabkota }}">
    </div>

    <div class="form-group">
            <label for="">Kecamatan</label>
        <input class="form-control" type="text" name="kecamatan" value="{{ $pendaftaran->kecamatan }}">
    </div>

    <div class="form-group">
            <label for="">Desa / Kelurahan</label>
        <input class="form-control" type="text" name="desakelurahan" value="{{ $pendaftaran->desakelurahan }}">
    </div>

    <div class="form-group">
            <label for="">Alamat Lengkap</label>
        <input class="form-control" type="text" name="alamatlengkap" value="{{ $pendaftaran->alamatlengkap }}">
    </div>

    <div class="form-group">
            <label for="">Kode Pos</label>
        <input class="form-control" type="text" name="kodepos" value="{{ $pendaftaran->kodepos }}">
    </div>

    <div class="form-group">
            <label for="">Nama Ayah</label>
        <input class="form-control" type="text" name="namaayah" value="{{ $pendaftaran->namalengkapayah }}">
    </div>

    <div class="form-group">
            <label for="">Nama Ibu</label>
        <input class="form-control" type="text" name="namaibu" value="{{ $pendaftaran->namalengkapibu }}">
    </div>

    <div class="form-group">
            <label for="">Pekerjaan Ayah</label>
        <input class="form-control" type="text" name="pekerjaanayah" value="{{ $pendaftaran->pekerjaanayah }}">
    </div>

    <div class="form-group">
            <label for="">Pekerjaan Ibu</label>
        <input class="form-control" type="text" name="pekerjaanibu" value="{{ $pendaftaran->pekerjaanibu }}">
    </div>

    <div class="form-group">
            <label for="">No Telp Rumah</label>
        <input class="form-control" type="text" name="notelprumah" value="{{ $pendaftaran->notelprumah }}">
    </div>

    <div class="form-group">
            <label for="">No Telp Hp</label>
        <input class="form-control" type="text" name="notelphp" value="{{ $pendaftaran->notelphp }}">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>

    <div class="form-group">
        <a href="{{ url('admin/pendaftaran') }}" class="btn btn-outline-info">Kembali</a>
    </div>

        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
