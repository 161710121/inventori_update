@extends('layouts.admin')
@section('content')

<section class="content">
	<div class="row">
		<div class="col-12">
		  	<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title">Data Kampus</h3>
					<div class="card-title pull-right">
						<a href="{{route('kampus.create')}}">Tambah Data <i class="fa fa-plus"></i></a>
					</div>
				</div>
				
				<div class="card-body table-responsive p-0">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>KODE KAMPUS</th>
								<th>NAMA KAMPUS</th>
								<th>ALAMAT</th>
								<th>TELEPON KAMPUS</th>
								<th>DESKRIPSI</th>
								<th>STATUS</th>
								<th colspan="3" style="text-align: center;">ACTION</th>
							</tr>
						</thead>
					
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach ($kampus as $data)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $data->kode_kampus }}</td>
								<td>{{ $data->nama_kampus }}</td>
								<td>{{ $data->alamat }}</td>
								<td>{{ $data->telp_kampus }}</td>
								<td>{{ $data->deskripsi }}</td>
								<td>{{ $data->status }}</td>
								
								<td>
									<a href="{{ route('kampus.edit', $data->id) }}" class="btn btn-warning">Edit</a>
								</td>
								<td>
									<form action="{{ route('kampus.destroy', $data->id) }}" method="post">
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