@extends('layout.base')

@section('content')
<div class="row mt-5 mb-5">
	<a href="/blog/tambah" class="btn btn-lg btn-primary mb-3">Tambah</a>
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				Semua Postingan
			</div>
			<div class="card-body">
				<table class="table table-hover table-bordered">
					<tr>
						<th>Nama</th>
						<th>Tanggal Ditulis</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
					@foreach($post as $b)
					<tr>
						<td>{{ $b->namaPosting }}</td>
						<td>{{ $b->created_at }}</td>
						<td>{{ $b->status }}</td>
						<td>
							<a href="/blog/lihat/{{$b->id}}" class="btn btn-sm btn-secondary">Lihat</a>
							<a href="/blog/ubah/{{ $b->id }}" class="btn btn-sm btn-warning">Ubah</a>
							<a onclick="return confirm('Anda yakin ingin menghapus?')" href="/blog/hapus/{{ $b->id }}" class="btn btn-sm btn-danger">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>		
			</div>
		</div>
	</div>
</div>
@endsection