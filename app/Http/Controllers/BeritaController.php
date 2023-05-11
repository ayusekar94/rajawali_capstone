<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.pengelola.berita',[
            'item' => DB::table('beritas')->paginate(10),
            'title' => 'Berita'
       ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.pengelola.berita_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_berita' => 'required',
            'image'=> 'required|image|mimes:png,jpg|max:2040',
            'deskripsi' => 'required',
            'wisata_id' => 'required',
            'category_id' => 'required',
        ]);
        //=======================

        Berita::create([
            'name' => $validated['nama_berita'],
            'deskripsi' => $validated['deskripsi'],
            'wisata_id' => $validated['wisata_id'],
            'category_id' => $validated['category_id'],
        ]);

        return redirect()->intended('/berita');
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
        return view("backend.pages.pengelola.berita_edit",[
            'title' => 'Pengelola - Edit Wisata',
            'item' => Berita::find($id),
        ]);
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
        $validated = $request->validate([
            'nama_berita' => 'required',
            'image'=> 'required|image|mimes:png,jpg|max:2040',
            'deskripsi' => 'required',
            'wisata_id' => 'required',
            'category_id' => 'required',
        ]);

        Berita::where('id', $id)->update([
            'name' => $validated['nama_berita'],
            'deskripsi' => $validated['deskripsi'],
            'wisata_id' => $validated['wisata_id'],
            'category_id' => $validated['category_id'],

        ]);
        return redirect("/berita");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::destroy($id);
        return redirect("/berita");
    }
}
