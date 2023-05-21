<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    // public function __construct(){
    //     return $this->middleware('user') && $this->middleware('login');
    // }

    public function index(){
        $data ['title'] = 'Riwayat';
        $data ['user'] = User::where('id', Auth::user()->id)->first();
        // $data ['user'] = User::where('id', Auth::user()->id)->first(); 

    	return view('backend.pages.user.profile', $data);
    }
     // Edit profile - Role User
	// public function profil($id)
    // {
    //     $data ['title'] = 'Edit Data Pengguna';
    //     $data ['user'] = User::find($id);

    // 	return view('backend.pages.user.user', $data);
    //     return view("backend.pages.user.user_edit",[
    //         'title' => 'Admin - Edit User',
    //         'item' => User::where('id', Auth::user()->id)->first(),
    //     ]);
    // }

    public function update(Request $request)
    {
    	 $this->validate($request, [
            'password'  => 'confirmed',
        ]);

    	$user = User::where('id', Auth::user()->id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->nohp = $request->noHp;
    	$user->alamat = $request->alamat;
    	if(!empty($request->password))
    	{
    		$user->password = Hash::make($request->password);
    	}
    	
    	$user->update();

    	return redirect('/history');
    }
}
