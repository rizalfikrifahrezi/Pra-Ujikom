<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use App\Kategori;
use App\Tag;
use App\materipendidikan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class MateriPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->paginate(5);
        $count = Artikel::all();
        // $cari = $request->cari;
        // if ($cari) {
        //     $artikel = Artikel::where('judul', 'LIKE', "%$cari%")->paginate(5);
        // }
        return view('admin.materipendidikan.index', compact('artikel', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = Tag::all();
        $cat = Kategori::all();
        return view('admin.materipendidikan.create', compact('tag', 'cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materipendidikan = new MateriPendidikan;
        $materipendidikan->no = $request->no;
        $materipendidikan->bidang = $request->bidang;
        $materipendidikan->matapelajaran = $request->matapelajaran;

        # Foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path().'/assets/img/artikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $upload = $file->move($path, $filename);

            $materipendidikan->foto = $filename;
        }
        $materipendidikan->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan data materi pendidikan"
        ]);
        return redirect()->route('materipendidikan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materipendidikan = materipendidikan::findOrFail($id);
        return view('backend.materipendidikan.edit', compact('materipendidikan'));
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
        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->slug = str_slug($request->judul);
        $artikel->konten = $request->konten;
        $artikel->user_id = Auth::user()->id;
        $artikel->kategori_id = $request->kategori;
        # Foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path().'/assets/img/artikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            if($artikel->foto){
                $old_foto = $artikel->foto;
                $filepath = public_path().'/assets/img/artikel/'.$artikel->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
            $artikel->foto = $filename;
        }
        $artikel->save();
        $artikel->tag()->sync($request->tag);
        toastr()->success('Data artikel berhasil diubah!');
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        if($artikel->foto){
            $old_foto = $artikel->foto;
            $filepath = public_path().'/assets/img/artikel/'.$artikel->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                //Exception $e;
            }
        }
        $artikel->tag()->detach($artikel->id);
        $artikel->delete();
        toastr()->error('Data artikel berhasil dihapus!');
        return redirect()->route('artikel.index');
    }
}
