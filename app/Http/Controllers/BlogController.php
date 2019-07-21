<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BlogModel as blog;

class BlogController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function index()
    {
    	$title = "laravel-blog";
    	$post = blog::all();
    	return view('blog', ['title' => $title,  'post' => $post]);
    }

    public function add()
    {
    	$title = "laravel-blog | Tambah";
    	return view('add', ['title' => $title]);
    }

    public function saveBlog(Request $request)
    {
    	$tambah = new blog;
    	$tambah->namaPosting = $request->namaPosting;
    	$tambah->blogPosting = $request->blogPosting;
    	$tambah->status = $request->status;
    	$tambah->save();
    	return redirect('/blog');
    }

    public function lihat($id)
    {
    	$title = "laravel-blog | Lihat";
    	$post = blog::find($id);
    	return view('blog_detail', ['title' => $title , 'post' => $post]);
    }

    public function ubah($id)
    {
    	$title = "laravel-blog | ubah";
    	$post = blog::find($id);
    	return view('blog_edit', ['title' => $title , 'post' => $post]);
    }

    public function simpanUbah($id, Request $request)
    {
    	$post = blog::find($id);
    	$post->namaPosting = $request->namaPosting;
    	$post->blogPosting = $request->blogPosting;
    	$post->status = $request->status;
    	$post->save();

    	return redirect('/blog');
    }

    public function hapus($id)
    {
    	$post = blog::find($id);
    	$post->delete();

    	return redirect('/blog');
    }
}
