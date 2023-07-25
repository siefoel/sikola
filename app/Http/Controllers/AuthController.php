<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }
        public function login( Request $request){
        $validate =  $request->validate([
                'username' => 'required',
                'password' => 'required'
            ],[
                'username.required' => "Username atau Email harus di isi !!",
                'password.required' => "Password harus di isi !!",
            ]);
            function checkEmail($email) {
                $find1 = strpos($email, '@');
                $find2 = strpos($email, '.');
                return ($find1 !== false && $find2 !== false && $find2 > $find1);
             }

            $email = $request->username;
            if ( checkEmail($email) ) {
                $data = [
                    'email' => $request->username,
                    'password' => $request->password
                ];
            }else{
                $data = [
                    'username' => $request->username,
                    'password' => $request->password
                ];
            }
            if (Auth::attempt($data)) {
                return redirect('/dashboard');
            }else{
                return redirect('/auth')->with('faild','Username tidak ditemukan !!!');
            }
    }
    
    public function pendaftaran(){
        return view('auth.pendaftaran');
    }
}
