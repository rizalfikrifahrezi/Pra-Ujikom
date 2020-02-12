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
use Session;
use Illuminate\Support\Str;

class MateriPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materipendidikan = MateriPendidikan::all();

        return view('admin.materipendidikan.index', compact('materipendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materipendidikan = MateriPendidikan::all();
        return view('admin.materipendidikan.create', compact('materipendidikan'));
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
        $materipendidikan->namabidang = $request->namabidang;
        $materipendidikan->matapelajaran = $request->matapelajaran;


        $materipendidikan->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan data materipendidikan bernama <b>$materipendidikan->foto</b>!"
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
        $materipendidikan = MateriPendidikan::findOrFail($id);
        return view('admin.materipendidikan.edit', compact('materipendidikan'));
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
        $materipendidikan = MateriPendidikan::findOrFail($id);
        $materipendidikan->namabidang = $request->namabidang;
        $materipendidikan->matapelajaran = $request->matapelajaran;

        $materipendidikan->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan</b>!"
        ]);
        return redirect()->route('materipendidikan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materipendidikan = MateriPendidikan::findOrfail($id)->delete();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
        ]);
        return redirect()->route('materipendidikan.index');
    }
}
