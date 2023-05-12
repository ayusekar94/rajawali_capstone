<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // DASHBOARD
    public function index(){
        // $data ['title'] = 'Wisata';
        // $data['item'] = Wisata::with('category')->get();

        // return view('backend.pages.pengelola.wisata', $data);
        return view('backend.pages.pengelola.wisata',[
             'item' => DB::table('wisatas')->paginate(10),
             'title' => 'Wisata'
        ]);  
     }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data ['title'] = 'Tambah Data Produk';
        $data['category'] = Category::all();

        return view('backend.pages.pengelola.wisata_add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all()); 
        $request->validate([ 
            'name' => 'required', 
            'image'=> 'required|image|file|max:1024',
            'description' => 'required', 
            'rating' => 'required', 
            'price' => 'required', 
            'location' => 'required', 
            'category_id' => 'required' 
        ]); 
 
        //upload image 
        $image = $request->file('image'); 
        $image->storeAs('gambar', $image->hashName());

        Wisata::create([
            'name' => $request->name,
            'description' => $request->description,
            'rating' =>$request->rating,
            'price' =>$request->price,
            'location' =>$request->location,
            'category_id' =>$request->category_id,
            'image' =>$image->hashName()
        ]);

        
        return redirect('wisata');
        // return redirect()->intended('wisata');
        
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
        return view("backend.pages.pengelola.wisata_edit",[
            'title' => 'Pengelola - Edit wisata',
            'item' => Wisata::find($id),
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
            'image' => 'required',
            'nama_wisata' => 'required',
            'deskripsi' => 'required',
            'ticket_price' => 'required',
            'rating' => 'required',
            'location' => 'required',
            'category_id' => 'required'
        ]);

        Wisata::where('id', $id)->update([
            'image' => $validated['image'],
            'nama' => $validated['nama_wisata'],
            'deskripsi' => $validated['deskripsi'],
            'price' => $validated['ticket_price'],
            'rating' => $validated['rating'],
            'location' => $validated['location'],
            'category_id' => $validated['category_id'],
        ]);

        return redirect('wisata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wisata::destroy($id);
        return redirect("/wisata");
    }
}
