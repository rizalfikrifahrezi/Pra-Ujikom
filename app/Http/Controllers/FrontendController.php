<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\materipendidikan;
use App\fasilitas;
use App\galeri;
use App\ekstrakurikuler;
use App\Kategori;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = Fasilitas::all();
        // $artikel = Artikel::with('tag')->orderBy('created_at', 'desc')->paginate(3);
        // $review = Review::with('buku')->paginate(10);
        // $allbuku = Buku::with('kategori')->paginate(9);
        return view('fasilitas', compact('fasilitas'));
    }

    public function galeri()
    {
        $galeri = Galeri::all();
        // $artikel = Artikel::with('tag')->orderBy('created_at', 'desc')->paginate(3);
        // $review = Review::with('buku')->paginate(10);
        // $allbuku = Buku::with('kategori')->paginate(9);
        return view('galeri', compact('galeri'));
    }

    public function ekstrakurikuler()
    {
        $ekstrakurikuler = Ekstrakurikuler::all();
        // $artikel = Artikel::with('tag')->orderBy('created_at', 'desc')->paginate(3);
        // $review = Review::with('buku')->paginate(10);
        // $allbuku = Buku::with('kategori')->paginate(9);
        return view('ekstrakurikuler', compact('ekstrakurikuler'));
    }

    public function materipendidikan()
    {
        $materipendidikan = MateriPendidikan::all();
        // $artikel = Artikel::with('tag')->orderBy('created_at', 'desc')->paginate(3);
        // $review = Review::with('buku')->paginate(10);
        // $allbuku = Buku::with('kategori')->paginate(9);
        return view('materipendidikan', compact('materipendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
