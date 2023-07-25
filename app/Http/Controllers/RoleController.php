<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index() {
        return view('role.role');
    }
    public function menus(){
        return view('role.menus');
    }

    public function permission(){
        return view('role.permission');
    }
}
