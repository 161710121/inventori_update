@extends('layouts.admin')
@section('content')

<section class="content">
		<div class="row">
			<div class="container">
				<div class="col-md-12">
					<div class="box box-primary">
						<div class="box box-primary">
							<div class="box-header">
								<p class="box-title" style="font-size:25px">Edit Data Kampus</p>
								<a class="fa fa-arrow-circle-left box-title pull-right btn btn-info" href="{{route('kampus.index')}}"> Kembali</a>
							</div>
						</div>
				<!-- /.box-header -->
				
				<!-- form start -->
				<div class="box-body">
					<form action="{{ route('kampus.update',$kampus->id) }}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{ csrf_field() }}
							
							<div class="form-group row">
								<label for="kode_kampus" class="col-md-4 col-form-label text-md-right">{{ __('Kode Kampus') }}</label>
								
								<div class="col-md-6">
									<input id="kode_kampus" type="text" class="form-control{{ $errors->has('kode_kampus') ? ' is-invalid' : '' }}" name="kode_kampus" value="{{ $kampus->kode_kampus }}" >
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
									<input id="nama_kampus" type="text" class="form-control{{ $errors->has('nama_kampus') ? ' is-invalid' : '' }}" name="nama_kampus" value="{{ $kampus->nama_kampus }}" >
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
									<input id="alamat" type="textarea" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ $kampus->alamat }}" >
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
									<input id="telp_kampus" type="text" class="form-control{{ $errors->has('telp_kampus') ? ' is-invalid' : '' }}" name="telp_kampus" value="{{ $kampus->telp_kampus }}" >
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
									<input id="deskripsi" type="text" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" name="deskripsi" value="{{ $kampus->deskripsi }}" >
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
									<input id="status" type="text" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" value="{{ $kampus->status }}" >
									@if ($errors->has('status'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('status') }}</strong>
									</span>
									@endif
								</div>
							</div>
							<!-- /.box-body -->
							
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
@endsection
				
