<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Berita;

class BeritasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
         $this->middleware('auth');
    }
    public function index()
    {
        //
        $beritas= Berita::all();
        return view('admin.content.berita.index')->with(['beritas'=>$beritas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.content.berita.create');

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
        $berita=new Berita();
        $this->validate($request, [
            'judul' => 'required|max:100',
            'body' => 'required',
            'gambar'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $berita->judul=$request->input('judul');
        $berita->body=$request->input('body');
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $filetoStore = $request->input('judul').'_'.time().'.'.$file->getClientOriginalExtension();
        $request->file('gambar')->move("image/", $filetoStore);
        $berita->gambar=$filetoStore;
        $berita->save();
        return redirect('admin/berita')->with('success','Berita Berhasil Ditambahkan');
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
        // $berita=Berita::find($id)->delete();
        return redirect('/admin/berita');
    }
}
