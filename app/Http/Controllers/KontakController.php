<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function index()
    {
    	$title = "laravel-blog | kontak";
    	return view('kontak', ['title' => $title]);
    }
}
