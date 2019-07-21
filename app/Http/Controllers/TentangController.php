<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$title = "laravel-blog | Tentang";
    	return view('tentang', ['title' => $title]);
    }

}
