<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required' => 'Email Wajib diisi ya',
            'password.require' => 'Password Wajib diisi ya kawan'
        ]);

        // $this->validate($request, [
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

       

         $hasilLogin = [
            'email' => $request->email,
            'password' => $request->password
         ];

         if(Auth::attempt($hasilLogin)){
            // If Authentification Success
            return redirect('/dashboard')-> with('Berhasil', 'Berhasil Login');
         }else{
            // return 'gagal brow';
           
            return redirect('/login') -> withErrors('username pass salah');
        }

        // if(Auth::guard('admin')->attempt([$hasilLogin, 'role'=>'admin'])){
        //     return redirect()-> intended(default:'/dashboard');
        // }else{
        //     // return 'gagal brow';
           
        //     return redirect('/login') -> withErrors('username pass salah');
        // }

       
    }

    // public function keluar(){

    // }
}
