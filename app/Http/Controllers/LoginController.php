<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.login');
        
    }

    public function logincheck(Request $request){
        $akun = $request->validate(
            [
                'username' => ['required'],
                'password' => ['required']
            ]
            );
        if(Auth::attempt($akun)){
            $request->session()->regenerate();
            $user = Auth::user();
            session_start();
            session(['username' => $user->username]);
            if($user->role == 'admin') {
                return redirect('/dashboard-admin');
            } elseif($user->role == 'siswa') {
                return redirect('/beranda')->with('success', 'Anda berhasil Login!');
            } elseif($user->role == 'guru'){
                return redirect('/beranda')->with('success', 'Anda berhasil Login!');
            }   
            else{
                return redirect('/login')->with('error', 'Pastikan Username & Password Anda telah sesuai!');
            }
        }
        else{
            return redirect('/login')->with('error', 'Pastikan Username & Password Anda telah sesuai!');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}