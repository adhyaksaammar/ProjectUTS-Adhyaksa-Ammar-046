@extends('layouts.admin')
@section('content')

<div class="container">
	<div class="row">
		
		<div class="col-md-6">
			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Hover Data Table</h3>
	            </div>

	            <!-- /.box-header -->
	            <div class="box-body">
	            	<form action="{{ route('peminjaman.store') }}" method="POST">
			  			{{ csrf_field() }}
			  			<h3>Data Peminjam</h3>
						  <div class="form-group">
						    <label for="nama">Nama Anggota</label>
						    	<input type="text" name="nama" class="form-control" id="nama">
						  </div>
						  <div class="form-group">
						    <label for="nim">NIM Anggota</label>
						    	<input type="text" name="nim" class="form-control" id="nim">
						  </div>
						<h3>Data Peminjaman</h3>
						  <div class="form-group">
						    <label for="no_pinjam">Nomor Peminjaman</label>
						    	<input type="text" name="no_pinjam" class="form-control" id="no_pinjam">
						  </div>
						  <div class="form-group">
						    <label for="tanggal_pinjam">Tanggal Pemijaman</label>
						    	<input type="text" name="tanggal_pinjam" class="form-control" id="tanggal_pinjam">
						  </div>
						  <div class="form-group">
						    <label for="lama_pinjam">Lama Pemijaman</label>
						    	<input type="text" name="lama_pinjam" class="form-control" id="lama_pinjam">
						  </div>
						  <div class="form-group">
						    <label for="tanggal_kembali">Tanggal Pengembalian</label>
						    	<input type="text" name="tanggal_kembali" class="form-control" id="tanggal_kembali">
						  </div>
	            </div>
	        </div>	
		</div>

		<div class="col-md-6">
			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Hover Data Table</h3>
	            </div>

	            <!-- /.box-header -->
	            <div class="box-body">
	            	<!-- table stok Buku -->
	            	<table class="table" id="tabel">
	            		<thead>
	            			<tr>
	            				<th>No</th>
	            				<th>Kode Buku</th>
	            				<th>Judul</th>
	            				<th>Stock</th>
	            			</tr>
	            		</thead>
	            		<tbody>

	            			@php
	            				$no = 1
	            			@endphp

	            			@foreach ($buku as $item)
	            			
	            			<tr>
	            				<td>{{ $no }}</td>
	            				<td>{{ $item['kode_buku'] }}</td>
	            				<td>{{ $item['judul'] }}</td>
	            				<td>{{ $item['jumlah'] }}</td>
	            			</tr>

	            			@php
	            				$no++
	            			@endphp

	            			@endforeach
	            		</tbody>
	            	</table>
	            </div>
	            <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">Hover Data Table</h3>
		            </div>

		            <!-- /.box-header -->
		            <div class="box-body">
		            	<div class="form-group">
						    <label for="kode_buku">Kode Buku</label>
						    <select name="id_buku" class="form-control" id="">
						    	@foreach ($buku as $item)
						    		<option value="{{$item->id}}">{{$item->kode_buku}} / {{$item->judul}}</option>
						    	@endforeach
						    </select>
	
						</div>
						<div class="form-group">
						    <label for="id_pegawai">Pegawai</label>
						    <!-- <select name="id_pegawai" class="form-control" id="">
						    	@foreach ($pegawai as $item)
						    		<option value="{{$item->id}}">{{$item->id_pegawai}} / {{$item->nama}}</option>
						    	@endforeach
						    </select> -->
						    <input type="text" name="id_pegawai" class="form-control" id="id_pegawai">
						</div>
						<div class="form-group">
							<button class="btn btn-block button-success">Pinjam</button>
						</div>
		            </div>
		          	</form>
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