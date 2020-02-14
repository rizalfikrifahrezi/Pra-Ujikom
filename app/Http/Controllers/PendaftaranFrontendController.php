<?php

namespace App\Http\Controllers;

use App\pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class PendaftaranFrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function awal()
    {
        return view('pendaftaran');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function kirimdata(Request $request)
    {
        $pendaftaran = new Pendaftaran;
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
        $pendaftaran->alamatlengkap = $request->alamatlengkap;
        $pendaftaran->kodepos = $request->kodepos;
        $pendaftaran->namalengkapayah = $request->namaayah;
        $pendaftaran->namalengkapibu = $request->namaibu;
        $pendaftaran->pekerjaanayah = $request->pekerjaanayah;
        $pendaftaran->pekerjaanibu = $request->pekerjaanibu;
        $pendaftaran->notelprumah = $request->notelprumah;
        $pendaftaran->notelphp = $request->notelphp;

        $pendaftaran->save();

        return redirect()->route('pendaftaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
