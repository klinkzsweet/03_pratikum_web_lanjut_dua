<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PraksatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('blog.home')
            ->with('title','Halaman Utama');
    }

    public function about(){
        return view('blog.about-us')
            ->with('title','Halaman About-Us');
    }

    public function news($berita){
        return view('blog.news')
            ->with('berita', $berita)
            ->with('title','Halaman Berita');
    }

    public function edu_games(){
        return view('blog.product')
            ->with('product', 'edugames')
            ->with('title','Product Edu Games');
    }

    public function kids_games(){
        return view('blog.product')
            ->with('product', 'kidsgames')
            ->with('title','Product Kids Games');
    }

    public function riri(){
        return view('blog.product')
            ->with('product', 'riri')
            ->with('title','Product Riri');
    }

    public function kolak(){
        return view('blog.product')
            ->with('product', 'kolak')
            ->with('title','Product Kolak');
    }

    public function karir(){
        return view('blog.program')
            ->with('program', 'karir')
            ->with('title','Program Karir');
    }

    public function magang(){
        return view('blog.program')
            ->with('program', 'magang')
            ->with('title','Program Magang');
    }

    public function kunjungan(){
        return view('blog.program')
            ->with('program', 'kunjungan-industri')
            ->with('title','Program Kunjungan Industri');
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
