<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //tampilkan page login
    public function index(){
        // set variabel title dengan menambahkan array data
        // penamaan title karena di file view kita set title dengan variabel $title
        return view('login', [
            'title' => 'Login Page'
        ]);
    }

    //proses login
    public function prosesLogin(Request $request){
        //validasi data kosong
        $data = $request->validate([
            'username' => 'required',
            'pwd' => 'required',
        ]);

        // panggil api via model
        $response = Login::auth($data);

        // dd($response);

        // cek apakah response ada sessionID apa tidak
        if($response["IDSession"]) {
            $sessionID = [
                "IDSession  " => $response["IDSession"]
            ];
            
            $user_access = Login::getUserAccess($sessionID);

            $request->session()->put("sessionID", $response["IDSession"]);
            $request->session()->put("user_access", $user_access);
            return redirect('/landing-page')->with('success', 'Berhasil Login');
        } else {
            return redirect('/landing-page')->with('error', 'Gagal Login');
        }
    }

    //tampilkan page register
    public function register(){
        return view('register', [
            'title' => 'Register'
        ]);
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

    public function logout()
    {
        $session = [
            "IDSession" => session('sessionID')
        ];

        $data = Login::logout($session);
        session()->flush();
        if ($data[0]['message']==="Logout Success") {
            return redirect('/login')->with('success', 'Berhasil Loout');
        } else {
            return redirect()->back()->with('error', 'Gagal Logout');
        }
    }
}