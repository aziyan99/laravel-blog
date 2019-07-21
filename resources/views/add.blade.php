@extends('layout.base')

@section('content')

<div class="row mt-5 mb-5">
	<a href="/blog" class="btn btn-lg mb-3 btn-secondary"><< Kembali</a>
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				Tambah Postingan
			</div>
			<div class="card-body">
				<form action="/blog/save" method="post" class="form">
					<input type="hidden" name="_token" value="{{ @csrf_token() }}">
					<div class="form-group">
						<label>Nama Postingan</label>
						<input type="text" class="form-control" name="namaPosting">
					</div>
					<div class="form-group">
						<label>Postingan</label>
						<textarea cols="30" rows="10" class="form-control" name="blogPosting"></textarea>
					</div>
					<div class="form-group">
						<label>Status</label>
						<input type="text" class="form-control" name="status">
					</div>
					<button class="btn btn-primary">Simpan</button>
					<button class="btn btn-warning">Reset</button>
				</form>
			</div>
		</div>
	</div>
</div>


@endsection