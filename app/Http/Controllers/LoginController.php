<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
Use App\User;
use Session;
use Redirect;
class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function login(Request $request)
    {        
        $credentials = $request->only('username', 'password');
        if(Auth::attempt($credentials)){
            // return ' berhasil Login, selamat datang '. auth()->user()->username;
           
            return redirect()->route('dashbaord');
            
        }
        return 'gagal';
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return Redirect::to('/login');
    }
}


