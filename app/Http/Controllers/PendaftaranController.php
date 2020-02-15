<?php

namespace App\Http\Controllers;

use App\pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Session;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::orderBy('created_at', 'desc')->paginate(5);
        $count = Pendaftaran::all();
        // $cari = $request->cari;
        // if ($cari) {
        //     $pendaftaran = pendaftaran::where('judul', 'LIKE', "%$cari%")->paginate(5);
        // }
        return view('admin.pendaftaran.index', compact('pendaftaran', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendaftaran = new Pendaftaran;
        $pendaftaran->pilihangkatan = $request->pilihangkatan;
        $pendaftaran->namalengkap = $request->namalengkap;
        $pendaftaran->jeniskelamin = $request->jeniskelamin;
        $pendaftaran->tempatlahir = $request->tempatlahir;
        $pendaftaran->tanggallahir = $request->tanggallahir;
        $pendaftaran->nomortelpon = $request->notelpon;
        $pendaftaran->email = $request->email;
        $pendaftaran->provinsi = $request->provinsi;
        $pendaftaran->kabkota = $request->kabkota;
        $pendaftaran->kecamatan = $request->kecamatan;
        $pendaftaran->desakelurahan = $request->desakelurahan;
        $pendaftaran->alamat = $request->alamatlengkap;
        $pendaftaran->kodepos = $request->kodepos;
        $pendaftaran->namalengkapayah = $request->namaayah;
        $pendaftaran->namalengkapibu = $request->namaibu;
        $pendaftaran->pekerjaanayah = $request->pekerjaanayah;
        $pendaftaran->pekerjaanibu = $request->pekerjaanibu;
        $pendaftaran->notelprumah = $request->notelprumah;
        $pendaftaran->notelphp = $request->notelphp;

        $pendaftaran->save();
        //
        toastr()->success('Data pendaftaran berhasil dismpan!');
        return redirect()->route('admin.pendaftaran.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendaftaran = pendaftaran::findOrFail($id);
        return view('admin.pendaftaran.show', compact('pendaftaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('admin.pendaftaran.edit', compact('pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->pilihangkatan = $request->pilihangkatan;
        $pendaftaran->namalengkap = $request->namalengkap;
        $pendaftaran->tempatlahir = $request->tempatlahir;
        $pendaftaran->tanggallahir = $request->tanggallahir;
        $pendaftaran->nomortelpon = $request->notelpon;
        $pendaftaran->email = $request->email;
        $pendaftaran->provinsi = $request->provinsi;
        $pendaftaran->kabkota = $request->kabkota;
        $pendaftaran->kecamatan = $request->kecamatan;
        $pendaftaran->desakelurahan = $request->desakelurahan;
        $pendaftaran->alamat = $request->alamatlengkap;
        $pendaftaran->kodepos = $request->kodepos;
        $pendaftaran->namalengkapayah = $request->namaayah;
        $pendaftaran->namalengkapibu = $request->namaibu;
        $pendaftaran->pekerjaanayah = $request->pekerjaanayah;
        $pendaftaran->pekerjaanibu = $request->pekerjaanibu;
        $pendaftaran->notelprumah = $request->notelprumah;
        $pendaftaran->notelphp = $request->notelphp;

        $pendaftaran->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan</b>!"
        ]);
        return redirect()->route('pendaftaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrfail($id)->delete();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
        ]);
        return redirect()->route('pendaftaran.index');
    }
}
