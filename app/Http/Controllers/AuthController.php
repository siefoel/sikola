<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function login(){
        return view('auth.login');
    }
    public function pendaftaran(){
        return view('auth.pendaftaran');
    }
}
