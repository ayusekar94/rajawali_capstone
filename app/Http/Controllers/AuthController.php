<?php

namespace App\Http\Controllers;

use App\Models\Pengelola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

    // register
    public function rindex(){
        $data ['title'] = 'Register';

        return view('backend.pages.register', $data);
    }

    public function rstore(Request $request){
        // dd($request->all());
        switch($request->role){
            case 'pengelola':
                $validatedData = $request->validate([
                    'name' => 'required',
                    'email' => 'required|email',
                    'password' => 'required',
                    'jenisKelamin' => 'required',
                    'alamat' => 'required|min:5',
                    'noHp' => 'required',
                ]);
                
                $validatedData['password'] = bcrypt( $validatedData['password']);
        
                Pengelola::create($validatedData);
                break;
            case "user" :
                $validatedData = $request->validate([
                    'name' => 'required',
                    'email' => 'required|email',
                    'password' => 'required',
                    'jenisKelamin' => 'required',
                    'alamat' => 'required|min:5',
                    'noHp' => 'required',
                ]);
                
                $validatedData['password'] = bcrypt( $validatedData['password']);
                
                User::create($validatedData);
                break;
        }
        
        return redirect('/')->with('success', 'Registration Successfull');
    }
}
