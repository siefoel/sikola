<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index() {
        return view('sekolah.sekolah');
    }
    public function verify() {
        return view('sekolah.verifysekolah');
    }
}
