@extends('layouts.admin')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div>
				<a href="{{ route('buku.create') }}" class="btn-sm btn-success">Tambah Data Buku</a>	
			</div>
			<div class="card">
			  <div class="card-header">
			    <h2>Data Buku</h2>
			  </div>
			  <div class="card-body">
			  		<table class="table table-striped" id="tabel">
						<tr>
							<th>Judul</th>
							<th>Pengarang</th>
							<th>Penerbit</th>
							<th>Tahun</th>
							<th>Jumlah Buku</th>
							<th>Aksi</th>
						</tr>
						@foreach ($data as $datas)
						<tr>
							<td>{{$datas->judul}}</td>
							<td>{{$datas->pengarang}}</td>
							<td>{{$datas->penerbit}}</td>
							<td>{{$datas->tahun}}</td>
							<td>{{$datas->jumlah}}</td>
							<td>
								<a href="{{route('buku.edit',['id'=>$datas->id])}}" class="btn-sm btn-warning">Edit</a>
								<form action="{{route('buku.destroy',['id'=>$datas->id])}}" method="POST">
									{{ csrf_field() }} 
									<input type="hidden" name="_method" value="DELETE">
									<button type="submit" class="btn-sm btn-danger">Hapus</button>
								</form>
							</td>
						</tr>
						@endforeach
					</table>
			  </div>
			</div>			
		</div>
	</div>
</div>
@push('script')
	<script>
		$(document).ready(function () {
			$('#tabel').DataTable()
		})
	</script>
@endpush
@endsection