<?php

namespace App\Http\Controllers;

use App\pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

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
        $pendaftaran = pendaftaran::findOrFail($id);
        $select = $pendaftaran->tag->pluck('id')->toArray();
        return view('admin.pendaftaran.edit', compact('pendaftaran', 'cat', 'tag', 'select'));
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
        $request->validate([
            'judul' => 'required',
            'konten' => 'required|min:50',
            'foto' => 'mimes:jpeg.jpg.png.gif|max:2048',
            'kategori' => 'required',
            'tag' => 'required'
        ]);
        $pendaftaran = pendaftaran::findOrFail($id);
        $pendaftaran->judul = $request->judul;
        $pendaftaran->slug = str_slug($request->judul);
        $pendaftaran->konten = $request->konten;
        $pendaftaran->user_id = Auth::user()->id;
        $pendaftaran->kategori_id = $request->kategori;
        # Foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path().'/assets/img/pendaftaran/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            if($pendaftaran->foto){
                $old_foto = $pendaftaran->foto;
                $filepath = public_path().'/assets/img/pendaftaran/'.$pendaftaran->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
            $pendaftaran->foto = $filename;
        }
        $pendaftaran->save();
        $pendaftaran->tag()->sync($request->tag);
        toastr()->success('Data pendaftaran berhasil diubah!');
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
        $pendaftaran = pendaftaran::findOrFail($id);
        if($pendaftaran->foto){
            $old_foto = $pendaftaran->foto;
            $filepath = public_path().'/assets/img/pendaftaran/'.$pendaftaran->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                //Exception $e;
            }
        }
        $pendaftaran->tag()->detach($pendaftaran->id);
        $pendaftaran->delete();
        toastr()->error('Data pendaftaran berhasil dihapus!');
        return redirect()->route('pendaftaran.index');
    }
}
