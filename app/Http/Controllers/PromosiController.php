<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Promosi;

class PromosiController extends Controller
{
    public function index(){
        $data ['title'] = 'Promosi';
        $data['item'] = DB::table('promosis')->paginate(10);

        return view('backend.pages.pengelola.promosi', $data);
    }

    public function create()
    {
        $data ['title'] = 'Tambah Data Produk';

        return view('backend.pages.pengelola.promosi_add', $data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image'=> 'required|image|file|max:1024',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('gambar', $image->hashName());

        Promosi::create([
            'name' => $request->name,
            'price' =>$request->price,
            'image' =>$image->hashName()
        ]);

        return redirect('/promosi');        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

        $data ['title'] = 'Edit Promosi';
        $data['promosi'] = Promosi::find($id);

        return view('backend.pages.pengelola.promosi_edit', $data);

    }

    public function update(Request $request, Promosi $promosi)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image'=> 'image|file|max:1024',
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('gambar', $image->hashName());

            //delete old image
            Storage::delete('gambar'.$promosi->image);

            //update post with new image
            $promosi->update([
                'image'     => $image->hashName(),
                'name' => $request->name,
                'price' =>$request->price,
            ]);

        } else {
            //update post without image
            $promosi->update([
                'name' => $request->name,
                'price' =>$request->price,
            ]);
        }

        return redirect('/promosi');
    }

    public function destroy($id)
    {
        Promosi::destroy($id);
        return redirect("/promosi")->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
