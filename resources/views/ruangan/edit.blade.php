@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Edit Data Ruangan</h3>
						<a class="fa fa-arrow-circle-left card-title pull-right" href="{{route('ruangan.index')}}"> Kembali</a>
					</div>
				</div>
				<!-- /.card-header -->
				
				<!-- form start -->
				<div class="panel-body">
					<form action="{{ route('ruangan.update',$ruangan->id) }}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{ csrf_field() }}
							
							<div class="form-group row">
								<label for="kode_ruangan" class="col-md-4 col-form-label text-md-right">{{ __('Kode Ruangan') }}</label>
								
								<div class="col-md-6">
									<input id="kode_ruangan" type="text" class="form-control{{ $errors->has('kode_ruangan') ? ' is-invalid' : '' }}" name="kode_ruangan" value="{{ $ruangan->kode_ruangan }}" >
									@if ($errors->has('kode_ruangan'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('kode_ruangan') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>
								
								<div class="col-md-6">
									<input id="deskripsi" type="text" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" name="deskripsi" value="{{ $ruangan->deskripsi }}" >
									@if ($errors->has('deskripsi'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('deskripsi') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							
							<div class="form-group row">
								<label for="ukuran_panjang" class="col-md-4 col-form-label text-md-right">{{ __('Ukuran Panjang') }}</label>
								
								<div class="col-md-6">
									<input id="ukuran_panjang" type="text" class="form-control{{ $errors->has('ukuran_panjang') ? ' is-invalid' : '' }}" name="ukuran_panjang" value="{{ $ruangan->ukuran_panjang }}" >
									@if ($errors->has('ukuran_panjang'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('ukuran_panjang') }}</strong>
									</span>
									@endif
								</div>
							</div>

							
							<div class="form-group row">
								<label for="ukuran_lebar" class="col-md-4 col-form-label text-md-right">{{ __('Ukuran Lebar') }}</label>
								
								<div class="col-md-6">
									<input id="ukuran_lebar" type="text" class="form-control{{ $errors->has('ukuran_lebar') ? ' is-invalid' : '' }}" name="ukuran_lebar" value="{{ $ruangan->ukuran_lebar }}" >
									@if ($errors->has('ukuran_lebar'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('ukuran_lebar') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="ukuran_tinggi" class="col-md-4 col-form-label text-md-right">{{ __('Ukuran Tinggi') }}</label>
								
								<div class="col-md-6">
									<input id="ukuran_tinggi" type="text" class="form-control{{ $errors->has('ukuran_tinggi') ? ' is-invalid' : '' }}" name="ukuran_tinggi" value="{{ $ruangan->ukuran_tinggi }}" >
									@if ($errors->has('ukuran_tinggi'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('ukuran_tinggi') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							
							<div class="form-group row">
								<label for="status_penggunaan" class="col-md-4 col-form-label text-md-right">{{ __('Status Penggunaan') }}</label>
								
								<div class="col-md-6">
									<input id="status_penggunaan" type="text" class="form-control{{ $errors->has('status_penggunaan') ? ' is-invalid' : '' }}" name="status_penggunaan" value="{{ $ruangan->status_penggunaan }}" >
									@if ($errors->has('status_penggunaan'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('status_penggunaan') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="barang_id" class="col-md-4 col-form-label text-md-right">{{ __('Barang') }}</label>
								
								<div class="col-md-6">
									<select name="barang_id" class="form-control">
										@foreach($barang as $data)
										<option value="{{ $data->id}}" {{$baranga == $data->id ? 'selected="selected"' : '' }}>{{$data->kode_barang}}</option>
										@endforeach
									</select>
									
									@if ($errors->has('barang_id'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('barang_id') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="jenisruangan_id" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Ruangan') }}</label>
								
								<div class="col-md-6">
									<select name="jenisruangan_id" class="form-control">
										@foreach($jenisruang as $data)
										<option value="{{ $data->id}}" {{$jenisruanga == $data->id ? 'selected="selected"' : '' }}>{{$data->kode_jenis_ruangan}}</option>
										@endforeach
									</select>
									
									@if ($errors->has('jenisruangan_id'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('jenisruangan_id') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="kampus_id" class="col-md-4 col-form-label text-md-right">{{ __('Kampus') }}</label>
								
								<div class="col-md-6">
									<select name="kampus_id" class="form-control">
										@foreach($kampus as $data)
										<option value="{{ $data->id}}" {{$kampusa == $data->id ? 'selected="selected"' : '' }}>{{$data->kode_kampus}}</option>
										@endforeach
									</select>
									
									@if ($errors->has('kampus_id'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('kampus_id') }}</strong>
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
				
