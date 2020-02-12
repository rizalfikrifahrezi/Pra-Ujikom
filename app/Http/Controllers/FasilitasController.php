<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Tag;
use Illuminate\Http\Request;
use App\Kategori;
use App\fasilitas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Session;
use Illuminate\Support\Str;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = Fasilitas::all();

        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fasilitas = Fasilitas::all();
        return view('admin.fasilitas.create', compact('fasilitas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fasilitas = new Fasilitas;
        $fasilitas->foto = $request->foto;
        $fasilitas->namafasilitas = $request->namafasilitas;
        $fasilitas->penjelasan = $request->penjelasan;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path() . '/assets/img/fasilitas/';
            $filename = Str::random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($destinationPath, $filename);

            $fasilitas->foto = $filename;
        }

        $fasilitas->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan data fasilitas bernama <b>$fasilitas->foto</b>!"
        ]);
        return redirect()->route('fasilitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.edit', compact('fasilitas'));
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
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->namafasilitas = $request->namafasilitas;
        $fasilitas->penjelasan = $request->penjelasan;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path() . '/assets/img/fasilitas/';
            $filename = Str::random(40) . '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $fasilitas->foto = $filename;

        if ($fasilitas->fasilitas) {
            $old_cover = $fasilitas->foto;
            $filepath = public_path() . '/assets/img/fasilitas/' . $fasilitas->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                //Exception $e;
            }
        }
        $fasilitas->foto = $filename;
        }

        $fasilitas->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan</b>!"
        ]);
        return redirect()->route('fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrfail($id)->delete();
        Session::flash("flash_notification",[
             "level" => "Success",
             "message" => "Berhasil menghapus<b>"
         ]);
        return redirect()->route('fasilitas.index');
    }
}
