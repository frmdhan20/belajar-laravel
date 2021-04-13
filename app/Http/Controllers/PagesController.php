<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // controller
    public function home()
    {
    	return view('index');
    }

    public function about()
    {
    	return view('about', ['nama' => 'Fajar Ramadhan']);
    }
}
