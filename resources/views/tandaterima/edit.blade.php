@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Edit Data Tanda Terima</h3>
						<a class="fa fa-arrow-circle-left card-title pull-right" href="{{route('tandaterima.index')}}"> Kembali</a>
					</div>
				</div>
				<!-- /.card-header -->
				
				<!-- form start -->
				<div class="panel-body">
					<form action="{{ route('tandaterima.update',$tandaterima->id) }}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{ csrf_field() }}
							
							<div class="form-group row">
								<label for="nomor" class="col-md-4 col-form-label text-md-right">{{ __('Nomor') }}</label>
								
								<div class="col-md-6">
									<input id="nomor" type="text" class="form-control{{ $errors->has('nomor') ? ' is-invalid' : '' }}" name="nomor" value="{{ $tandaterima->nomor }}" >
									@if ($errors->has('nomor'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('nomor') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group row">
								<label for="tgl" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal') }}</label>
								
								<div class="col-md-6">
									<input id="tgl" type="date" class="form-control{{ $errors->has('tgl') ? ' is-invalid' : '' }}" name="tgl" value="{{ $tandaterima->tgl }}" >
									@if ($errors->has('tgl'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('tgl') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="kampus_id" class="col-md-4 col-form-label text-md-right">{{ __('Kampus') }}</label>
								
								<div class="col-md-6">
									<select name="kampus_id" class="form-control">
										@foreach($kampus as $data)
										<option value="{{ $data->id}}" {{$kampusa == $data->id ? 'selected="selected"' : '' }}>{{$data->nama_kampus}}</option>
										@endforeach
									</select>
									
									@if ($errors->has('kampus_id'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('kampus_id') }}</strong>
									</span>
									@endif
								</div>
							</div>
							

							<div class="form-group row">
								<label for="barang_id" class="col-md-4 col-form-label text-md-right">{{ __('Barang') }}</label>
								
								<div class="col-md-6">
									<select name="barang_id" class="form-control">
										@foreach($barang as $data)
										<option value="{{ $data->id}}" {{$baranga == $data->id ? 'selected="selected"' : '' }}>{{$data->nama_barang}}</option>
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
								<label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi') }}</label>
								
								<div class="col-md-6">
									<input id="deskripsi" type="text" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" name="deskripsi" value="{{ $tandaterima->deskripsi }}" >
									@if ($errors->has('deskripsi'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('deskripsi') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="menerima" class="col-md-4 col-form-label text-md-right">{{ __('Menerima') }}</label>
								
								<div class="col-md-6">
									<input id="menerima" type="text" class="form-control{{ $errors->has('menerima') ? ' is-invalid' : '' }}" name="menerima" value="{{ $tandaterima->menerima }}" >
									@if ($errors->has('menerima'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('menerima') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							
							<div class="form-group row">
								<label for="menyerahkan" class="col-md-4 col-form-label text-md-right">{{ __('Menyerahkan') }}</label>
								
								<div class="col-md-6">
									<input id="menyerahkan" type="text" class="form-control{{ $errors->has('menyerahkan') ? ' is-invalid' : '' }}" name="menyerahkan" value="{{ $tandaterima->menyerahkan }}" >
									@if ($errors->has('menyerahkan'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('menyerahkan') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							
							<div class="form-group row">
								<label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
								
								<div class="col-md-6">
									<input id="status" type="text" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" value="{{ $tandaterima->status }}" >
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
				
