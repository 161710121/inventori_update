@extends('layouts.admin')
@section('content')

<section class="content">
		<div class="row">
			<div class="container">
				<div class="col-md-12">
					<div class="box box-primary">
						<div class="box box-primary">
							<div class="box-header">
								<p class="box-title" style="font-size:25px">Edit Data Kategori</p>
								<a class="fa fa-arrow-circle-left box-title pull-right btn btn-info" href="{{route('kategori.index')}}"> Kembali</a>
							</div>
						</div>
				<!-- /.box-header -->
				
				<!-- form start -->
				<div class="box-body">
					<form action="{{ route('kategori.update',$kategori->id) }}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{ csrf_field() }}
							
							<div class="form-group row">
								<label for="kode_kategori" class="col-md-4 col-form-label text-md-right">{{ __('Kode Kategori') }}</label>
								
								<div class="col-md-6">
									<input id="kode_kategori" type="text" class="form-control{{ $errors->has('kode_kategori') ? ' is-invalid' : '' }}" name="kode_kategori" value="{{ $kategori->kode_kategori }}" >
									@if ($errors->has('kode_kategori'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('kode_kategori') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="nama_kategori" class="col-md-4 col-form-label text-md-right">{{ __('Nama Kategori') }}</label>
								
								<div class="col-md-6">
									<input id="nama_kategori" type="text" class="form-control{{ $errors->has('nama_kategori') ? ' is-invalid' : '' }}" name="nama_kategori" value="{{ $kategori->nama_kategori }}" >
									@if ($errors->has('nama_kategori'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('nama_kategori') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>
								
								<div class="col-md-6">
									<input id="deskripsi" type="text" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" name="deskripsi" value="{{ $kategori->deskripsi }}" >
									@if ($errors->has('deskripsi'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('deskripsi') }}</strong>
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
				
