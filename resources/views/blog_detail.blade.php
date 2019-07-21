@extends('layout.base')


@section('content')
<div class="container mt-5 mb-5">
	<a href="/blog" class="btn btn-lg btn-secondary mb-3"><< Kembali</a>
	<div class="card">
	  <div class="card-header">
	    Detail Postingan
	  </div>
	  <div class="card-body">
	    <h5 class="card-title">{{ $post->namaPosting }}</h5>
	    <p class="card-text">{!! $post->blogPosting !!}</p>
	    <span class="text-muted">{{ $post->status }}</span>
	  </div>
	</div>
</div>



@endsection