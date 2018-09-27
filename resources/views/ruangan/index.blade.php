@extends('layouts.admin')
@section('content')

<section class="content">
	<div class="row">
		<div class="col-12">
		  	<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title">Data Barang</h3>
					<div class="card-title pull-right">
						<a href="{{route('ruangan.create')}}">Tambah Data <i class="fa fa-plus"></i></a>
					</div>
				</div>
				
				<div class="card-body table-responsive p-0">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>KODE RUANGAN</th>
								<th>DESKRIPSI</th>
								<th>UKURAN PANJANG</th>
								<th>UKURAN LEBAR</th>
								<th>UKURAN TINGGI</th>
								<th>STATUS PENGGUNAAN</th>
								<th>BARANG</th>
								<th>JENIS RUANGAN</th>
								<th>KAMPUS</th>
								<th colspan="3" style="text-align: center;">ACTION</th>
							</tr>
						</thead>
					
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach ($ruangan as $data)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $data->kode_ruangan }}</td>
								<td>{{ $data->deskripsi }}</td>
								<td>{{ $data->ukuran_panjang }}</td>
								<td>{{ $data->ukuran_lebar }}</td>
								<td>{{ $data->ukuran_tinggi }}</td>
								<td>{{ $data->status_penggunaan }}</td>
								<td>{{ $data->Barang->kode_barang }}</td>
								<td>{{ $data->Jenis_Ruangan->kode_jenis_ruangan }}</td>
								<td>{{ $data->Kampus->kode_kampus }}</td>
								
								<td>
									<a href="{{ route('ruangan.edit', $data->id) }}" class="btn btn-warning">Edit</a>
								</td>
								<td>
									<form action="{{ route('ruangan.destroy', $data->id) }}" method="post">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn btn-danger" onClick="return confirm('Are You Absolutely Sure You Want to Delete the Data?')">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection