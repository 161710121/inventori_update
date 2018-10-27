@extends('layouts.admin')
@section('content')

<section class="content">
		<div class="row">
			<div class="container">
				<div class="col-md-11">
					<div class="box box-info">
						<div class="box-header">
							<h3 class="box-title" style="font-size:20px; margin-bottom:1%">Data Barang</h3><br>
							<a class="fa fa-plus box-title btn btn-info" href="{{route('barang.create')}}"> Tambah</a>
						</div>
					
					<div class="box-body table-responsive p-0">
						<table style="table-layout:auto" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th style="text-align: center;">No</th>
									<th style="text-align: center;">KODE BARANG</th>
									<th style="text-align: center;">NAMA BARANG</th>
									<th style="text-align: center;">KATEGORI</th>
									<th style="text-align: center;">JUMLAH BARANG</th>
									<th style="text-align: center;">HARGA SATUAN</th>
									<th style="text-align: center;">TANGGAL INPUTAN</th>
									<th style="text-align: center;">DESKRIPSI</th>
									<th style="text-align: center;">STATUS</th>
									<th colspan="3" style="text-align: center;">ACTION</th>
								</tr>
							</thead>
							
							<tbody>
								@php
							$no = 1;
							@endphp
							@foreach ($barang as $data)
							<tr>
								<td style="text-align: center;">{{ $no++ }}</td>
								<td style="text-align: center;">{{ $data->kode_barang }}</td>
								<td>{{ $data->nama_barang }}</td>
								<td style="text-align: center;">{{ $data->Kategori->kode_kategori }}</td>
								<td style="text-align: center;">{{ $data->jumlah_barang }}</td>
								<td style="text-align: center;">{{ $data->harga_satuan }}</td>
								<td style="text-align: center;">{{ $data->tanggal_inputan }}</td>
								<td style="text-align: center;">{{ $data->deskripsi }}</td>
								<td style="text-align: center;">{{ $data->status }}</td>
								<td style="text-align: center;">
									<a href="{{ route('barang.edit', $data->id) }}" class="btn btn-warning">Edit</a>
								</td>
								<td style="text-align: center;">
									<form action="{{ route('barang.destroy', $data->id) }}" method="post">
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
	</div>
</section>
@endsection