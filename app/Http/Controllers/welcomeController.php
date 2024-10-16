<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Welcome To HRSync',
            'list'  =>['Home', 'Welcome']
        ];
        $activeMenu = 'dasboard';

        return view('welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
