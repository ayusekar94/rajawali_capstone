<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home
    public function index(){
        return view('frontend.pages.home',[
            'title' => 'HomePage'
        ]);  
    }

    // Info Berita
    public function bindex(){
        return view('frontend.pages.infoberita',[
            'title' => 'HomePage'
        ]);  
    }
}
