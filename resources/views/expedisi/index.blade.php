@extends('layouts.admin')
@section('content')

<section class="content">
	<div class="row">
		<div class="col-12">
		  	<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title">Data Expedisi</h3>
					<div class="card-title pull-right">
						<a href="{{route('expedisi.create')}}">Tambah Data <i class="fa fa-plus"></i></a>
					</div>
				</div>
				
				<div class="card-body table-responsive p-0">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>NOMOR TRANSAKSI</th>
								<th>KAMPUS</th>
								<th>TANGGAL</th>
								<th>WAKTU</th>
								<th>BARANG</th>
								<th>JUMLAH</th>
								<th>STATUS</th>
								<th>DESKRIPSI</th>
								<th>HARGA</th>
								<th>PENGIRIM</th>
								<th>PENERIMA</th>
								<th colspan="3" style="text-align: center;">ACTION</th>
							</tr>
						</thead>
					
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach ($expedisi as $data)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $data->no_transaksi }}</td>
								<td>{{ $data->Kampus->kode_kampus }}</td>
								<td>{{ $data->tgl }}</td>
								<td>{{ $data->waktu }}</td>
								<td>{{ $data->Barang->nama_barang }}</td>
								<td>{{ $data->jumlah }}</td>
								<td>{{ $data->status }}</td>
								<td>{{ $data->deskripsi }}</td>
								<td>{{ $data->harga }}</td>
								<td>{{ $data->pengirim }}</td>
								<td>{{ $data->penerima }}</td>
								
								<td>
									<a href="{{ route('expedisi.edit', $data->id) }}" class="btn btn-warning">Edit</a>
								</td>
								<td>
									<form action="{{ route('expedisi.destroy', $data->id) }}" method="post">
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