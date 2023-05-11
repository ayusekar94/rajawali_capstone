<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Halaman Login
    public function login(){
        if(session('isLogin') == true){
            return redirect('/dashboard');
        }
        
        return view('/');
    }
    
    // Cek login
    public function store(Request $request){
        //jika username ada
        switch($request->role){

            case "admin" :
                $user = DB::table('admins')->where('email', $request->email)->first();
                break;
            case 'pengelola':
                $user = DB::table('pengelolas')->where('email', $request->email)->first();
                break;
            case "user" :
                $user = DB::table('users')->where('email', $request->email)->first();
                break;
        }
        // dd($request->all())
        //jika password benar
        if($user){
            if(Hash::check($request->password,$user->password)){
                session([
                    'isLogin' => true,
                    'role' => $request->role,
                    'id' => $user->id,
                    'email' => $user->email,
                    'name' => $user->name,
                    'jenisKelamin' => $user->jenisKelamin
                    ]);
                // return redirect('/'.$request->role);
                return redirect('/dashboard');
            }
            //jika password salah
            return redirect('/')->with('error_password', 'Password Tidak Cocok');
        }
        
        //jika username tidak ada
        return redirect('/')->with('error_username', 'Username Tidak Ditemukan');
    }
    
    // Logout
    public function logout(){
        session()->flush();
        return redirect('/');
    }
}
