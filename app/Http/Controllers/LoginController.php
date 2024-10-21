<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //tampilkan page login
    public function index(){
        return view('login');
    }

    //proses login
    public function prosesLogin(Request $req){
        //validasi data kosong
        $data = $req->validate([
            'user_id' => 'required',
            'password' => 'required',
        ]);

        //validasi jika inputan user dengan database sama atau tidak
        if (Auth::attempt($data)) {
            $req->session()->regenerate();
            return redirect()->intended('landing-page');
        } 

        //mengembalikan error jika inputan user gak sesuai dengan database
        return back()->withErrors([
            'user_id' => 'User ID atau password salah.',
        ])->withInput($req->except('password'));
    }

    //tampilkan page register
    public function register(){
        return view('register');
    }

    //proses register
    public function prosesRegister(Request $req){
        //validasi data kosong
        $req->validate([
            'user_id' => 'required',
            'user_email' => 'required',
            'user_name' => 'required',
            'password' => 'required',
        ]);

        //memasukkan data user kedalam table user
        $user = User::create([
            'user_id' => $req->user_id,
            'user_email' => $req->user_email,
            'user_name' => $req->user_name,
            'password' => Hash::make($req->password),
        ]);

        //seharusnya ini validasi jika berhasil atau gagal register
        //belum selesai
        if ($user) {
            return redirect()->route('login');
        } else {
            return redirect()->route('register');
        }
    }

    
}
