<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Category;

class HomeController extends Controller
{
    // Home
    public function index(){
        return view('frontend.pages.home',[
            'title' => 'HomePage',
            'wisata' => Wisata::latest()->paginate(3),
            'category' => Category::all()
        ]);  
    }

    // Info Berita
    public function bindex(){
        return view('frontend.pages.infoberita',[
            'title' => 'HomePage'
        ]);  
    }

    // List Wisata
    public function wisata(){
        return view('frontend.pages.wisata',[
            'title' => 'Wisata List',
            'wisata' => Wisata::all(),
        ]);  
    }
}
