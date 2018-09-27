@extends('layouts.admin')
@section('content')
	
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Tambah Data Jenis Ruangan</h3>
						<a class="fa fa-arrow-circle-left card-title pull-right" href="{{route('ruangjns.index')}}"> Kembali</a>
					</div>
				</div>
				<!-- /.card-header -->

				<!-- form start -->
				<div class="panel-body">
					<form action="{{ route('ruangjns.store') }}" method="post">
						{{ csrf_field() }}

						<div class="form-group row">
							<label for="kode_jenis_ruangan" class="col-md-4 col-form-label text-md-right">{{ __('Kode Jenis Ruangan') }}</label>

							<div class="col-md-6">
								<input id="kode_jenis_ruangan" type="text" class="form-control{{ $errors->has('kode_jenis_ruangan') ? ' is-invalid' : '' }}" name="kode_jenis_ruangan" value="{{ old('kode_jenis_ruangan') }}" required autofocus>
								@if ($errors->has('kode_jenis_ruangan'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('kode_jenis_ruangan') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="jenis_ruangan" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Ruangan') }}</label>
							
							<div class="col-md-6">
								<input id="jenis_ruangan" type="text" class="form-control{{ $errors->has('jenis_ruangan') ? ' is-invalid' : '' }}" name="jenis_ruangan" value="{{ old('jenis_ruangan') }}" required autofocus>
								@if ($errors->has('jenis_ruangan'))
								<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('jenis_ruangan') }}</strong>
								</span>
								@endif
							</div>
						</div>
						
						<div class="form-group row">
							<label for="tgl_berlaku" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Berlaku') }}</label>
							
							<div class="col-md-6">
								<input id="tgl_berlaku" type="date" class="form-control{{ $errors->has('tgl_berlaku') ? ' is-invalid' : '' }}" name="tgl_berlaku" value="{{ old('tgl_berlaku') }}" required autofocus>
								@if ($errors->has('tgl_berlaku'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('tgl_berlaku') }}</strong>
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
							


