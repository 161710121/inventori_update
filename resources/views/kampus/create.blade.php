@extends('layouts.admin')
@section('content')
	
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Tambah Data Kampus</h3>
						<a class="fa fa-arrow-circle-left card-title pull-right" href="{{route('kampus.index')}}"> Kembali</a>
					</div>
				</div>
				<!-- /.card-header -->

				<!-- form start -->
				<div class="panel-body">
					<form action="{{ route('kampus.store') }}" method="post">
						{{ csrf_field() }}

						<div class="form-group row">
							<label for="kode_kampus" class="col-md-4 col-form-label text-md-right">{{ __('Kode Kampus') }}</label>

							<div class="col-md-6">
								<input id="kode_kampus" type="text" class="form-control{{ $errors->has('kode_kampus') ? ' is-invalid' : '' }}" name="kode_kampus" value="{{ old('kode_kampus') }}" required autofocus>
								@if ($errors->has('kode_kampus'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('kode_kampus') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="nama_kampus" class="col-md-4 col-form-label text-md-right">{{ __('Nama Kampus') }}</label>
							
							<div class="col-md-6">
								<input id="nama_kampus" type="text" class="form-control{{ $errors->has('nama_kampus') ? ' is-invalid' : '' }}" name="nama_kampus" value="{{ old('nama_kampus') }}" required autofocus>
								@if ($errors->has('nama_kampus'))
								<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('nama_kampus') }}</strong>
								</span>
								@endif
							</div>
						</div>
						
						<div class="form-group row">
							<label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
							
							<div class="col-md-6">
								<input id="alamat" type="textarea" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ old('alamat') }}" required autofocus>
								@if ($errors->has('alamat'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('alamat') }}</strong>
								</span>
								@endif
							</div>
						</div>
						
						<div class="form-group row">
							<label for="telp_kampus" class="col-md-4 col-form-label text-md-right">{{ __('Telepon Kampus') }}</label>
							
							<div class="col-md-6">
								<input id="telp_kampus" type="text" class="form-control{{ $errors->has('telp_kampus') ? ' is-invalid' : '' }}" name="telp_kampus" value="{{ old('telp_kampus') }}" required autofocus>
								@if ($errors->has('telp_kampus'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('telp_kampus') }}</strong>
								</span>
								@endif
							</div>
						</div>
						
						<div class="form-group row">
							<label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>
							
							<div class="col-md-6">
								<input id="deskripsi" type="text" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" name="deskripsi" value="{{ old('deskripsi') }}" required autofocus>
								@if ($errors->has('deskripsi'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('deskripsi') }}</strong>
								</span>
								@endif
							</div>
						</div>
						
						<div class="form-group row">
							<label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
							
							<div class="col-md-6">
								<input id="status" type="text" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" value="{{ old('status') }}" required autofocus>
								@if ($errors->has('status'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('status') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<!-- /.card-body -->
						
						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
							


